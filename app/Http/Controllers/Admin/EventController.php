<?php


// app/Http/Controllers/Admin/EventController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Category;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with(['category', 'host'])->latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
{
    // Debugging - log incoming request data
    \Log::debug('Event creation request data:', $request->all());
    
    try {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'fee' => 'required|numeric|min:0',
            'capacity' => 'nullable|integer|min:1',
            'is_featured' => 'boolean',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|',
        ]);

        \Log::debug('Validated data:', $validated);

        $validated['host_id'] = auth()->id();
        $validated['is_featured'] = $request->has('is_featured');

        // Debugging - log before creation
        \Log::debug('Creating event with data:', $validated);

        $event = Event::create($validated);
        \Log::debug('Event created with ID: ' . $event->id);

        if ($request->hasFile('images')) {
            \Log::debug('Processing images...');
            foreach ($request->file('images') as $key => $image) {
                try {
                    $path = $image->store('events/' . $event->id, 'public');
                    \Log::debug('Image stored at: ' . $path);
                    
                    $event->images()->create([
                        'image_path' => $path,
                        'is_primary' => $key === 0
                    ]);
                } catch (\Exception $e) {
                    \Log::error('Error storing image: ' . $e->getMessage());
                    continue;
                }
            }
        }

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully');

    } catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Validation failed: ' . json_encode($e->errors()));
        return back()->withErrors($e->errors())->withInput();
        
    } catch (\Exception $e) {
        \Log::error('Error creating event: ' . $e->getMessage());
        return back()->with('error', 'Error creating event: ' . $e->getMessage())->withInput();
    }
}
    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'fee' => 'required|numeric|min:0',
            'capacity' => 'nullable|integer|min:1',
            'is_featured' => 'boolean',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        $event->update($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('events/' . $event->id, 'public');
                $event->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        Storage::disk('public')->deleteDirectory('events/' . $event->id);
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully');
    }

    public function setPrimaryImage(Event $event, EventImage $image)
    {
        $event->images()->update(['is_primary' => false]);
        $image->update(['is_primary' => true]);
        return back()->with('success', 'Primary image updated');
    }

    public function deleteImage(EventImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();
        return back()->with('success', 'Image deleted');
    }
}