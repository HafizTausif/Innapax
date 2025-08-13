
@extends('layouts.admin')

@section('title', 'Edit RSVP')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit RSVP</h4>
            <a href="{{ route('admin.rsvps.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to RSVPs
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.rsvps.update', $rsvp) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="event_id" class="form-label">Event</label>
                            <select class="form-select" id="event_id" name="event_id" required>
                                @foreach($events as $event)
                                <option value="{{ $event->id }}" {{ $rsvp->event_id == $event->id ? 'selected' : '' }}>
                                    {{ $event->title }} ({{ $event->start_date->format('M d, Y') }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="user_id" class="form-label">User</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $rsvp->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} ({{ $user->email }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="guests" class="form-label">Number of Guests</label>
                            <input type="number" class="form-control" id="guests" name="guests" 
                                   value="{{ old('guests', $rsvp->guests) }}" min="1" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes', $rsvp->notes) }}</textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update RSVP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection