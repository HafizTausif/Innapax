<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\Rsvp;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'events_count' => Event::count(),
            'featured_events_count' => Event::where('is_featured', true)->count(),
            'users_count' => User::count(),
            'rsvps_count' => Rsvp::sum('guests'),
        ];

        $recentEvents = Event::with(['category', 'primaryImage'])
            ->latest()
            ->limit(5)
            ->get();

        $recentUsers = User::latest()
            ->limit(5)
            ->get();

        $recentRsvps = Rsvp::with(['event', 'user'])
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentEvents', 'recentUsers', 'recentRsvps'));
    }
}