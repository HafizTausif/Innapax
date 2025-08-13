
@extends('layouts.header')


<div class="pageheader bg_img"
    style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>Explore Events</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="about about--style3 padding-top pt-xl-0">
    <div class="container">
        <div class="section__wrapper">
            <form action="{{ route('events') }}" method="GET">
                <div class="banner__list banner__list-explore">
                    <div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                        <div class="col">
                            <select class="form-select" name="category">
                                <option value="">All Categories</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="city">
                                <option value="">All Cities</option>
                                @foreach($cities as $city)
                                <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>
                                    {{ $city }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" name="date" value="{{ request('date') }}">
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" placeholder="Min" name="min_fee" value="{{ request('min_fee') }}">
                                <span class="input-group-text">to</span>
                                <input type="number" class="form-control" placeholder="Max" name="max_fee" value="{{ request('max_fee') }}">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="padding-top padding-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="row g-3">
                    @foreach($events as $event)
                    <div class="col-12 d-flex align-items-start rounded">
                        <img src="{{ $event->primaryImage ? asset('storage/' . $event->primaryImage->image_path) : asset('assets/images/events/default.jpg') }}"
                            alt="{{ $event->title }}" class="rounded me-3" width="100" height="70">
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-bold">{{ $event->title }}</h5>
                            <div class="text-muted small">
                                {{ $event->category->name }} • {{ $event->city }}<br>
                                {{ $event->start_date->format('M d, Y h:i A') }}
                            </div>
                            <span class="badge bg-light text-dark mt-2">{{ $event->rsvp_count }} RSVPs</span>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold">${{ number_format($event->fee, 2) }}</div>
                            <div class="text-muted small">Capacity: {{ $event->capacity ?? 'Unlimited' }}</div>
                            <a href="{{ route('events.show', $event) }}" class="btn btn-sm btn-pink mt-2">View Event +</a>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-12 mt-3">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                <div class="border rounded overflow-hidden" style="height: 100%; min-height: 500px;">
                    <div id="map" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: { lat: 33.6844, lng: 73.0479 }, // Default to Islamabad
        });

        // Add markers for each event
        @foreach($events as $event)
            @if($event->latitude && $event->longitude)
                new google.maps.Marker({
                    position: { lat: {{ $event->latitude }}, lng: {{ $event->longitude }} },
                    map,
                    title: "{{ $event->title }}",
                });
            @endif
        @endforeach
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&callback=initMap" async defer></script>
@endpush

