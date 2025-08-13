<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rsvp;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    /**
     * Display a listing of RSVPs.
     */
    public function index()
    {
        $rsvps = Rsvp::with(['event', 'user'])
                    ->latest()
                    ->paginate(10);
                    
        return view('admin.rsvps.index', compact('rsvps'));
    }

    /**
     * Show RSVPs for a specific event.
     */
    public function eventRsvps(Event $event)
    {
        $rsvps = $event->rsvps()
                    ->with('user')
                    ->latest()
                    ->paginate(10);
                    
        return view('admin.rsvps.event', compact('rsvps', 'event'));
    }

    /**
     * Show the form for editing an RSVP.
     */
    public function edit(Rsvp $rsvp)
    {
        $events = Event::all();
        $users = User::all();
        
        return view('admin.rsvps.edit', compact('rsvp', 'events', 'users'));
    }

    /**
     * Update the specified RSVP.
     */
    public function update(Request $request, Rsvp $rsvp)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'user_id' => 'required|exists:users,id',
            'guests' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $rsvp->update($validated);

        return redirect()->route('admin.rsvps.index')
            ->with('success', 'RSVP updated successfully');
    }

    /**
     * Remove the specified RSVP.
     */
    public function destroy(Rsvp $rsvp)
    {
        $rsvp->delete();

        return redirect()->route('admin.rsvps.index')
            ->with('success', 'RSVP deleted successfully');
    }
}