@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid app-title m-0 shadow">
        <h2>Pick-Up Status</h2>
    </div>
    
    <div class="container-fluid app-content">
        <div class="w-100 outer-content">
            <div class="child-wrapper shadow">
                <div class="child-card">
                    <img src="{{ asset('img\pickupstatus\solar_user-broken.svg') }}" alt="">
                    <h3>{{ $user }}</h3>
                    <p>Users Registered</p>
                </div>
                <div class="child-card">
                    <img src="{{ asset('img\pickupstatus\healthicons_truck-driver (1).svg') }}" alt="">
                    <h3>{{ $driver }}</h3>
                    <p>Drivers Registered</p>
                </div>
            </div>
            <div class="child-wrapper d-flex flex-column justify-content-start right-wrapper">
                <div class="child-card-col shadow">
                    <div class="d-flex flex-row w-100 justify-content-center align-items-center">
                        <div class="section-right">
                            <img src="{{ asset('img\pickupstatus\fluent_alert-urgent-20-filled.svg') }}" alt="">
                            <h4>{{ $urgentOrders }}</h4>
                            <p>Urgent Pick Up</p>
                        </div>
                        <div class="vl"></div>
                        <div class="section-right">
                            <img src="{{ asset('img\pickupstatus\uil_schedule.svg') }}" alt="">
                            <h4>{{ $normalOrders }}</h4>
                            <p>Schedules Pick Up</p>
                        </div>
                    </div>
                </div>
                <div class="child-card-col custom-card-col shadow">
                    <h2>Total Orders</h2>
                    <p>{{ $totalOrders }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="container-fluid outer-content">
        <div class="container-fluid container-table-layer">
            <div class="outer-search">
                <form class="search-bar" method="get" action="/pickupstatus">
                    @csrf
                    <input type="text" name="search" id="" class="search-input" placeholder="Search">
                    <button class="btn"><img src="{{ asset('img\pickupstatus\btn\Vector (6).svg ') }}" alt=""></button>
                </form>
                
                <a href="/pickupstatus?urgent=1"><button class="btn btn-warning btn-urgent {{ request()->has('urgent') ? '' : 'inactive' }}">Urgent <img src="{{ asset('img\pickupstatus\btn\fluent_alert-urgent-20-filled (1).svg') }}" alt=""></button></a>
                <a href="/pickupstatus?schedule=1"><button class="btn btn-warning btn-urgent {{ request()->has('schedule') ? '' : 'inactive' }}">Schedule <img src="{{ asset('img\pickupstatus\btn\uil_schedule (1).svg') }}" alt=""></button></a>
            </div>
            

            <div class="content-table">
                <div class="card-table">
                    @foreach($ordersData as $order)
                    <div class="card-content-table p-2">
                        <div class="d-flex flex-row justify-content-start align-items-center w-50 gap-4">
                            <h2>{{ $order->id }}</h2>
                            <div class="line-1"></div>
                            <div class="d-flex flex-column">
                                <h4>{{ $order->user->name }}</h4>
                                <p>{{ $order->user->street_name }}</p>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-space-around align-items-center w-50">
                            <h3 class="w-50">Status : {{ $order->is_urgent ? "Urgent Pick Up" : "Scheduled Order" }}</h3>
                            <div class="w-50">
                                @if ($order->status == 'completed')                            
                                <div class="status-pickup-div-completed">Completed</div>
                                @else
                                <div class="status-pickup-div-progress">On Progress</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection