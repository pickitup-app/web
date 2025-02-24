@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid app-title m-0 shadow">
        <h2>Dashboard</h2>
    </div>
    
    <div class="container-fluid app-content">
        <div class="container wrapper-content">
            <div class="card-content d-flex flex-column shadow">
                <img src="{{ asset('./img/home-icon/person.svg') }}" alt="">
                <h3>{{ $users }}</h3>
                <p class="text-gray">Users Registered</p>
            </div>
            <div class="card-content d-flex flex-column shadow">
                <img src="{{ asset('./img/home-icon/checklist.svg') }}" alt="">
                <h3>{{ $orders }}</h3>
                <p class="text-gray">Orders Completed</p>
            </div>
            <div class="card-content d-flex flex-column shadow">
                <img src="{{ asset('./img/home-icon/truckdriver.svg') }}" alt="">
                <h3>{{ $drivers }}</h3>
                <p class="text-gray">Drivers Registered</p>
            </div>
            <div class="card-content d-flex flex-column shadow">
                <img src="{{ asset('./img/home-icon/admin.svg') }}" alt="">
                <h3>{{ $admins }}</h3>
                <p class="text-gray">Admins Registered</p>
            </div>
        </div>

        {{-- Social Media Section --}}

        <div class="container wrapper-content mt-5">
            <div class="card-content d-flex flex-column shadow p-0">
                <div class="social-header social-blue">
                    <img src="{{ asset('./img/home-icon/facebook.svg') }}" alt="">
                </div>
                <div class="d-flex flex-row w-100">
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>35k</h4>
                        <p class="text-gray">Friends</p>
                    </div>
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>128</h4>
                        <p class="text-gray">Feeds</p>
                    </div>
                </div>  
            </div>
            <div class="card-content d-flex flex-column shadow p-0">
                <div class="social-header social-black">
                    <img src="{{ asset('./img/home-icon/prime_twitter.svg') }}" alt="">
                </div>
                <div class="d-flex flex-row w-100">
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>35k</h4>
                        <p class="text-gray">Friends</p>
                    </div>
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>128</h4>
                        <p class="text-gray">Feeds</p>
                    </div>
                </div>  
            </div>
            <div class="card-content d-flex flex-column shadow p-0">
                <div class="social-header social-pink">
                    <img src="{{ asset('./img/home-icon/ig.svg') }}" alt="">
                </div>
                <div class="d-flex flex-row w-100">
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>35k</h4>
                        <p>Friends</p>
                    </div>
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>128</h4>
                        <p>Feeds</p>
                    </div>
                </div>  
            </div>
            <div class="card-content d-flex flex-column shadow p-0">
                <div class="social-header social-orange">
                    <img src="{{ asset('./img/home-icon/email.svg') }}" alt="">
                </div>
                <div class="d-flex flex-row w-100">
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>35k</h4>
                        <p>Friends</p>
                    </div>
                    <div class="social-followers w-50 d-flex flex-column justify-content-center align-items-center">
                        <h4>128</h4>
                        <p>Feeds</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection