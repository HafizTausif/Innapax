
@extends('layouts.admin')

@section('title', 'Event RSVPs')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">RSVPs for: {{ $event->title }}</h4>
            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to Events
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Guests</th>
                                <th>RSVP Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rsvps as $rsvp)
                            <tr>
                                <td>{{ $rsvp->user->name }}</td>
                                <td>{{ $rsvp->guests }}</td>
                                <td>{{ $rsvp->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.rsvps.edit', $rsvp) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $rsvps->links() }}
            </div>
        </div>
    </div>
</div>
@endsection