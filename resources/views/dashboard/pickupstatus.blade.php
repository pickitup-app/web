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
                    <h3>22.944</h3>
                    <p>Users Online</p>
                </div>
                <div class="child-card">
                    <img src="{{ asset('img\pickupstatus\healthicons_truck-driver (1).svg') }}" alt="">
                    <h3>3.044</h3>
                    <p>Drivers Online</p>
                </div>
            </div>
            <div class="child-wrapper d-flex flex-column justify-content-start right-wrapper">
                <div class="child-card-col shadow">
                    <div class="d-flex flex-row w-100 justify-content-center align-items-center">
                        <div class="section-right">
                            <img src="{{ asset('img\pickupstatus\fluent_alert-urgent-20-filled.svg') }}" alt="">
                            <h4>124</h4>
                            <p>Urgent Pick Up</p>
                        </div>
                        <div class="vl"></div>
                        <div class="section-right">
                            <img src="{{ asset('img\pickupstatus\uil_schedule.svg') }}" alt="">
                            <h4>20.345</h4>
                            <p>Schedules Pick Up</p>
                        </div>
                    </div>
                </div>
                <div class="child-card-col custom-card-col shadow">
                    <h2>Total Orders</h2>
                    <p>223.000.100</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="container-fluid outer-content">
        <div class="container-fluid container-table-layer">
            <div class="outer-search">
                <div class="search-bar">
                    <input type="text" name="" id="" class="search-input" placeholder="Search">
                    <button class="btn"><img src="{{ asset('img\pickupstatus\btn\Vector (6).svg ') }}" alt=""></button>
                </div>
                
                <button class="btn btn-warning btn-urgent">Urgent <img src="{{ asset('img\pickupstatus\btn\fluent_alert-urgent-20-filled (1).svg') }}" alt=""></button>
                <button class="btn btn-warning btn-urgent inactive">Schedule <img src="{{ asset('img\pickupstatus\btn\uil_schedule (1).svg') }}" alt=""></button>
            </div>
            

            <div class="content-table">
                <div class="card-table">
                    <div class="card-content-table p-2">
                        <div class="d-flex flex-row justify-content-start align-items-center w-50 gap-4">
                            <h2>01</h2>
                            <div class="line-1"></div>
                            <div class="d-flex flex-column">
                                <h4>Melisa Suprianti</h4>
                                <p>Mango Street No. 1234</p>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-space-around align-items-center w-50">
                            <h3 class="w-50">Status : Urgent Pick Up</h3>
                            <div class="w-50">                            
                                <div class="status-pickup-div-progress">On Progress</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-content-table p-2">
                        <div class="d-flex flex-row justify-content-start align-items-center w-50 gap-4">
                            <h2>01</h2>
                            <div class="line-1"></div>
                            <div class="d-flex flex-column">
                                <h4>Jonathan</h4>
                                <p>Mango Street No. 1234</p>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-space-around align-items-center w-50">
                            <h3 class="w-50">Status : Urgent Pick Up</h3>
                            <div class="w-50">                            
                                <div class="status-pickup-div-completed">Completed</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection