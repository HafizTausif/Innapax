
@extends('layouts.admin')

@section('title', 'Manage Events')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Events Management</h4>
            <div class="page-title-right">
                <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i> Add Event
                </a>
            </div>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Fee</th>
                                <th>Featured</th>
                                <!-- <th>Actions</th> -->
                                 <th> RSVPs</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>
                                    @if($event->images->first())
                                    <img src="{{ asset('storage/' . $event->images->first()->image_path) }}" alt="{{ $event->title }}" width="60" class="rounded">
                                    @else
                                    <img src="{{ asset('assets/images/default-event.png') }}" alt="No image" width="60" class="rounded">
                                    @endif
                                </td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->category->name }}</td>
                                <td>{{ $event->city }}</td>
                                <td>{{ $event->start_date->format('M d, Y') }}</td>
                                <td>${{ number_format($event->fee, 2) }}</td>
                                <td>
                                    @if($event->is_featured)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-secondary">No</span>
                                    @endif
                                </td>
                                <!-- <td>
                                    <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td> -->
                                <td>
    <a href="{{ route('admin.events.rsvps', $event) }}" class="btn btn-sm btn-info">
        <i class="fas fa-users"></i> RSVPs ({{ $event->rsvps_count }})
    </a>
</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $events->links() }}
            </div>
        </div>
    </div>
</div>
@endsection