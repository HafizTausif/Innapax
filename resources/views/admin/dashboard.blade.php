@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <div class="breadcrumb">
                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">
                    <h4 class="mb-0"><i class="fas fa-home me-1"></i> Dashboard</h4>
                </a>
            </div>
            <div class="page-title-right">
                <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i> Add Event
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row">
    <!-- Events Card -->
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card splash-info-card">
            <div class="card-body dd-flex align-items-center">
                <div class="icon-info">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                <div class="icon-info-text">
                    <h5 class="splash-title">Total Events</h5>
                    <h4 class="splash-card-title">{{ $stats['events_count'] }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Events Card -->
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card splash-info-card">
            <div class="card-body dd-flex align-items-center">
                <div class="icon-info">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <div class="icon-info-text">
                    <h5 class="splash-title">Featured Events</h5>
                    <h4 class="splash-card-title">{{ $stats['featured_events_count'] }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Card -->
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card splash-info-card">
            <div class="card-body dd-flex align-items-center">
                <div class="icon-info">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div class="icon-info-text">
                    <h5 class="splash-title">Registered Users</h5>
                    <h4 class="splash-card-title">{{ $stats['users_count'] }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- RSVPs Card -->
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card splash-info-card">
            <div class="card-body dd-flex align-items-center">
                <div class="icon-info">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="icon-info-text">
                    <h5 class="splash-title">Total RSVPs</h5>
                    <h4 class="splash-card-title">{{ $stats['rsvps_count'] }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Events Section -->
<div class="row">
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card chart-card">
            <div class="card-header">
                <h4>Recent Events</h4>
                <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-primary">View All</a>
            </div>
            <div class="card-body pb-4">
                <div class="chart-holder">
                    <div class="table-responsive">
                        <table class="table table-styled mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentEvents as $event)
                                <tr>
                                    <td>
                                        <span class="img-thumb">
                                            @if($event->primaryImage)
                                            <img src="{{ asset('storage/' . $event->primaryImage->image_path) }}" alt="{{ $event->title }}" width="40">
                                            @else
                                            <img src="{{ asset('assets/images/default-event.png') }}" alt="{{ $event->title }}" width="40">
                                            @endif
                                            <span class="ml-2">{{ Str::limit($event->title, 20) }}</span>
                                        </span>
                                    </td>
                                    <td>{{ $event->category->name }}</td>
                                    <td>{{ $event->start_date->format('M d, Y') }}</td>
                                    <td class="relative">
                                        <a class="action-btn" href="{{ route('admin.events.edit', $event->id) }}">
                                            <svg class="default-size" viewBox="0 0 341.333 341.333">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z"></path>
                                                            <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z"></path>
                                                            <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Users Section -->
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card chart-card">
            <div class="card-header">
                <h4>Recent Users</h4>
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-primary">View All</a>
            </div>
            <div class="card-body pb-4">
                <div class="chart-holder">
                    <div class="table-responsive">
                        <table class="table table-styled mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentUsers as $user)
                                <tr>
                                    <td>
                                        <span class="img-thumb">
                                            <img src="{{ asset('assets/images/default-user.png') }}" alt="{{ $user->name }}">
                                            <span class="ml-2">{{ $user->name }}</span>
                                        </span>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                    <td class="relative">
                                        <a class="action-btn" href="{{ route('admin.users.edit', $user->id) }}">
                                            <svg class="default-size" viewBox="0 0 341.333 341.333">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z"></path>
                                                            <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z"></path>
                                                            <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent RSVPs Section -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card chart-card">
            <div class="card-header">
                <h4>Recent RSVPs</h4>
                <a href="{{ route('admin.rsvps.index') }}" class="btn btn-sm btn-primary">View All</a>
            </div>
            <div class="card-body pb-4">
                <div class="chart-holder">
                    <div class="table-responsive">
                        <table class="table table-styled mb-0">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>User</th>
                                    <th>Guests</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentRsvps as $rsvp)
                                <tr>
                                    <td>{{ Str::limit($rsvp->event->title, 30) }}</td>
                                    <td>
                                        <span class="img-thumb">
                                            <img src="{{ asset('assets/images/default-user.png') }}" alt="{{ $rsvp->user->name }}">
                                            <span class="ml-2">{{ $rsvp->user->name }}</span>
                                        </span>
                                    </td>
                                    <td>{{ $rsvp->guests }}</td>
                                    <td>{{ $rsvp->created_at->format('M d, Y') }}</td>
                                    <td class="relative">
                                        <a class="action-btn" href="{{ route('admin.rsvps.edit', $rsvp->id) }}">
                                            <svg class="default-size" viewBox="0 0 341.333 341.333">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z"></path>
                                                            <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z"></path>
                                                            <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection