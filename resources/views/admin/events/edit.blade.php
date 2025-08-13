@extends('layouts.admin')

@section('title', 'Edit Event')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit Event</h4>
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
                <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $event->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $event->description) }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $event->city) }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="number" step="0.000001" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $event->latitude) }}">
                        </div>
                        <div class="col-md-4">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="number" step="0.000001" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $event->longitude) }}">
                        </div>
                        <div class="col-md-4">
                            <label for="is_featured" class="form-label">Featured Event</label>
                            <select class="form-select" id="is_featured" name="is_featured">
                                <option value="0" {{ !$event->is_featured ? 'selected' : '' }}>No</option>
                                <option value="1" {{ $event->is_featured ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $event->start_date->format('Y-m-d\TH:i')) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $event->end_date->format('Y-m-d\TH:i')) }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="fee" class="form-label">Fee ($)</label>
                            <input type="number" step="0.01" class="form-control" id="fee" name="fee" value="{{ old('fee', $event->fee) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="capacity" class="form-label">Capacity (leave blank for unlimited)</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity', $event->capacity) }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Additional Event Images</label>
                        <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
                        <small class="text-muted">Upload additional images</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Current Images</label>
                        <div class="row">
                            @foreach($event->images as $image)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" alt="Event image">
                                    <div class="card-body text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="primary_image" 
                                                   id="primary_{{ $image->id }}" value="{{ $image->id }}" 
                                                   {{ $image->is_primary ? 'checked' : '' }}>
                                            <label class="form-check-label" for="primary_{{ $image->id }}">Primary</label>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-danger delete-image" 
                                                data-id="{{ $image->id }}" data-event="{{ $event->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.delete-image').click(function() {
            if(confirm('Are you sure you want to delete this image?')) {
                const imageId = $(this).data('id');
                const eventId = $(this).data('event');
                
                $.ajax({
                    url: `/admin/events/${eventId}/images/${imageId}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function() {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
@endpush