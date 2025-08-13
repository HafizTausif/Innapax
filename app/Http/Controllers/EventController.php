<?php



// app/Http/Controllers/EventController.php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::with(['category', 'primaryImage', 'host'])
            ->upcoming()
            ->orderBy('start_date');

        // Apply filters
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        if ($request->filled('date')) {
            $query->whereDate('start_date', $request->date);
        }

        if ($request->filled('min_fee')) {
            $query->where('fee', '>=', $request->min_fee);
        }

        if ($request->filled('max_fee')) {
            $query->where('fee', '<=', $request->max_fee);
        }

        $events = $query->paginate(12);
        $categories = Category::all();
        $cities = Event::select('city')->distinct()->pluck('city');

        return view('events', compact('events', 'categories', 'cities'));
    }

// app/Http/Controllers/EventController.php

public function show(Event $event)
{
    $event->load([
        'category', 
        'images', 
        'host', 
        'comments' => function($query) {
            $query->with(['user' => function($q) {
                $q->select('id', 'name'); // Only select needed fields
            }]);
        },
        'rsvps' => function($query) {
            $query->with(['user' => function($q) {
                $q->select('id', 'name');
            }]);
        }
    ]);

    $relatedEvents = Event::where('category_id', $event->category_id)
        ->where('id', '!=', $event->id)
        ->upcoming()
        ->limit(4)
        ->get();

    return view('eventshow', compact('event', 'relatedEvents'));
}












// Add these methods to your EventController

public function rsvp(Request $request, Event $event)
{
    $request->validate([
        'guests' => 'required|integer|min:1|max:10',
    ]);

    // Check if user already RSVPed
    if ($event->rsvps()->where('user_id', auth()->id())->exists()) {
        return back()->with('error', 'You have already RSVPed for this event');
    }

    // Create RSVP
    $event->rsvps()->create([
        'user_id' => auth()->id(),
        'guests' => $request->guests,
    ]);

    return back()->with('success', 'You have successfully RSVPed for this event');
}

public function cancelRsvp(Event $event)
{
    $event->rsvps()->where('user_id', auth()->id())->delete();
    
    return back()->with('success', 'Your RSVP has been canceled');
}









/**
 * Store a newly created comment for an event
 */
public function storeComment(Request $request, Event $event)
{
    $request->validate([
        'content' => 'required|string|max:500',
    ]);

    try {
        $comment = $event->comments()->create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return back()->with([
            'success' => 'Comment added successfully',
            'scroll_to' => 'comment-' . $comment->id // For auto-scrolling to new comment
        ]);

    } catch (\Exception $e) {
        return back()->with('error', 'Failed to add comment: ' . $e->getMessage())
                     ->withInput();
    }
}

public function destroyComment(Event $event, Comment $comment)
{
    // Verify comment belongs to event and user
    if ($comment->event_id !== $event->id || $comment->user_id !== auth()->id()) {
        abort(403);
    }

    $comment->delete();
    return back()->with('success', 'Comment deleted successfully');
}
}