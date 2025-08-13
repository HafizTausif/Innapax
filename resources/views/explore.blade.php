@extends('layouts.app')

@section('content')
<style>
    /* Gender-specific colors */
    .male-card {
        border-top: 4px solid #4CAF50; /* Green for men */
    }
    .female-card {
        border-top: 4px solid #E91E63; /* Pink for women */
    }
    .member-box {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    .member-box:hover {
        transform: translateY(-5px);
    }
    .member-img {
        height: 250px;
        object-fit: cover;
    }
    .status-badge {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: rgba(0,0,0,0.7);
        color: white;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
    }
    .active_now {
        background: rgba(76, 175, 80, 0.9); /* Green for active now */
    }
    .search-input {
        padding: 12px 20px;
        border-radius: 30px;
        border: 1px solid #ddd;
        width: 100%;
        padding-left: 45px;
    }
    .search-icon {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
    }
</style>

<div class="pageheader bg_img" style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>Explore Travelers</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Explore</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="about about--style3 padding-top pt-xl-0">
    <div class="container">
        <div class="section__wrapper">
            <form action="#">
                <div class="banner__list banner__list-explore">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="position-relative">
                                <input type="text" class="form-control search-input" placeholder="Search travelers...">
                                <i class="fas fa-search search-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="padding-top padding-bottom bg-white">
    <div class="container">
        <div class="row justify-content-center g-4">
            @foreach($users as $user)
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="member-box position-relative {{ $user->gender == 'male' ? 'male-card' : 'female-card' }}">
                        <div class="position-relative">
                            <img src="{{ $user->profile_photo ? asset('storage/'.$user->profile_photo) : ($user->gender == 'male' ? asset('/assets/images/member/male/01.jpg') : asset('/assets/images/member/female/01.jpg')) }}"
                                alt="{{ $user->name }}" class="img-fluid w-100 member-img">
                            <span class="status-badge {{ $user->last_seen > now()->subMinutes(15) ? 'active_now' : '' }}">
                                <i class="fa fa-clock me-1"></i> 
                                @if($user->last_seen > now()->subMinutes(15))
                                    Active Now
                                @else
                                    Active {{ $user->last_seen->diffForHumans() }}
                                @endif
                            </span>
                        </div>
                        <div class="mt-4 p-3 member-info">
                            <h4 class="fw-bold mb-1">{{ $user->name }}</h4>
                            <div class="text-black">{{ $user->city }}</div>
                            <div class="text-muted small mt-2">
                                Joined {{ $user->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection.....................................................