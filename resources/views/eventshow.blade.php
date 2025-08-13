@extends('layouts.header')

<div class="pageheader bg-img" style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>{{ $event->title }}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('events') }}">Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $event->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <!-- Event Main Content -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- Event Gallery -->
                        @if($event->images->count() > 0)
                        <div class="event-gallery mb-4">
                            <div class="row g-2">
                                @foreach($event->images as $image)
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" 
                                         alt="Event image" 
                                         class="img-fluid rounded">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Event Details -->
                        <h4 class="mb-3">About This Event</h4>
                        <p>{{ $event->description }}</p>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5>Details</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Date:</strong> {{ $event->start_date->format('F j, Y') }}</li>
                                    <li><strong>Time:</strong> {{ $event->start_date->format('g:i A') }}</li>
                                    <li><strong>Location:</strong> {{ $event->location }}, {{ $event->city }}</li>
                                    <li><strong>Category:</strong> {{ $event->category->name }}</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Pricing & Capacity</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Fee:</strong> ${{ number_format($event->fee, 2) }}</li>
                                    <li><strong>Capacity:</strong> 
                                        @if($event->capacity)
                                            {{ $event->capacity }} ({{ $event->capacity - $event->rsvps->sum('guests') }} remaining)
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li><strong>Attendees:</strong> {{ $event->rsvps->sum('guests') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSVP Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-4">Attend This Event</h4>
                        
                        @if($event->capacity && ($event->capacity - $event->rsvps->sum('guests') <= 0))
                            <div class="alert alert-warning">
                                This event is at full capacity.
                            </div>
                        @else
                            @auth
                                @if(auth()->user()->hasRSVPed($event))
                                    <div class="alert alert-success">
                                        <i class="fas fa-check-circle me-2"></i> You're attending this event with {{ auth()->user()->rsvps()->where('event_id', $event->id)->first()->guests }} guest(s)!
                                    </div>
                                    <form action="{{ route('events.rsvp.destroy', $event) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-times-circle me-1"></i> Cancel RSVP
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('events.rsvp.store', $event) }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="guests" class="form-label">Number of Guests (including you)</label>
                                            <input type="number" 
                                                   class="form-control" 
                                                   id="guests" 
                                                   name="guests" 
                                                   min="1" 
                                                   max="{{ $event->capacity ? $event->capacity - $event->rsvps->sum('guests') : 10 }}" 
                                                   value="1" 
                                                   required>
                                            @if($event->capacity)
                                                <small class="text-muted">Maximum: {{ $event->capacity - $event->rsvps->sum('guests') }} spots remaining</small>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-calendar-check me-1"></i> RSVP Now
                                        </button>
                                    </form>
                                @endif
                            @else
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i> Please <a href="{{ route('login') }}" class="alert-link">login</a> to RSVP for this event.
                                </div>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">Host Information</h4>
                        <div class="d-flex align-items-center">
                            <img src="{{ $event->host->profile_photo_url }}" 
                                 alt="{{ $event->host->name }}" 
                                 class="rounded-circle me-3" 
                                 width="60"
                                 height="60">
                            <div>
                                <h5>{{ $event->host->name }}</h5>
                                <p class="text-muted mb-0">Event Host</p>
                                @if($event->host->email)
                                    <a href="mailto:{{ $event->host->email }}" class="small text-primary">Contact Host</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">Location</h4>
                        <div class="ratio ratio-16x9 mb-3">
                            @if($event->latitude && $event->longitude)
                                <div id="event-map" style="width: 100%; height: 100%;"></div>
                            @else
                                <div id="dummy-map" style="width: 100%; height: 100%; background-color: #f5f5f5; display: flex; align-items: center; justify-content: center;">
                                    <div class="text-center p-3">
                                        <i class="fas fa-map-marker-alt fa-3x text-muted mb-2"></i>
                                        <p class="mb-0">Location map not available</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <p class="mt-2 mb-1"><strong>{{ $event->location }}</strong></p>
                        <p class="text-muted mb-0">{{ $event->city }}</p>
                    </div>
                </div>







                <!-- Comments Section -->
<div class="card mb-4">
    <div class="card-body">
        <h4 class="mb-4">Comments ({{ $event->comments->count() }})</h4>
        
        <!-- Comment Form -->
        @auth
        <form action="{{ route('events.comments.store', $event) }}" method="POST" class="mb-4">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" rows="3" 
                          placeholder="Share your thoughts..." required></textarea>
                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">
                <i class="fas fa-paper-plane me-1"></i> Post Comment
            </button>
        </form>
        @else
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i> Please <a href="{{ route('login') }}" class="alert-link">login</a> to leave a comment.
        </div>
        @endauth

        <!-- Comments List -->
        <div class="comments-list">
            @forelse ($event->comments as $comment)
            <div class="comment-item mb-3 pb-3 border-bottom">
                <div class="d-flex align-items-start">
                    <img src="{{ asset('assets/images/default.jpg') }}" 
                         alt="{{ $comment->user->name }}"
                         class="rounded-circle me-3"
                         width="40"
                         height="40">
                    <div>
                        <div class="d-flex align-items-center mb-1">
                            <h6 class="mb-0 me-2">{{ $comment->user->name }}</h6>
                            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-0">{{ $comment->content }}</p>
                        
                        @auth
                        @if(auth()->id() === $comment->user_id)
                        <form action="{{ route('events.comments.destroy', [$event, $comment]) }}" 
                              method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash-alt me-1"></i> Delete
                            </button>
                        </form>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-4">
                <i class="far fa-comment-dots fa-2x text-muted mb-2"></i>
                <p class="text-muted">No comments yet. Be the first to comment!</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

                @if($relatedEvents->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">You Might Also Like</h4>
                        @foreach($relatedEvents as $relatedEvent)
                            <div class="mb-3 pb-2 border-bottom">
                                <a href="{{ route('events.show', $relatedEvent) }}" class="d-flex text-decoration-none text-dark">
                                    <img src="{{ $relatedEvent->primaryImage ? asset('storage/' . $relatedEvent->primaryImage->image_path) : asset('assets/images/events/default.jpg') }}" 
                                         alt="{{ $relatedEvent->title }}" 
                                         class="rounded me-3" 
                                         width="80"
                                         height="60"
                                         style="object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">{{ Str::limit($relatedEvent->title, 30) }}</h6>
                                        <small class="text-muted d-block">{{ $relatedEvent->start_date->format('M d, Y') }}</small>
                                        <small class="text-primary">${{ number_format($relatedEvent->fee, 2) }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if($event->latitude && $event->longitude)
@push('scripts')
<script>
    // Initialize event map
    function initEventMap() {
        const location = { lat: {{ $event->latitude }}, lng: {{ $event->longitude }} };
        const map = new google.maps.Map(document.getElementById("event-map"), {
            zoom: 15,
            center: location,
            mapTypeControl: false,
            streetViewControl: false
        });

        new google.maps.Marker({
            position: location,
            map,
            title: "{{ $event->title }}",
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png"
            }
        });
    }

    // Load Google Maps if not already loaded
    if (typeof google === 'object' && typeof google.maps === 'object') {
        initEventMap();
    } else {
        window.initEventMap = initEventMap;
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&callback=initEventMap" async defer></script>
@endpush
@endif

