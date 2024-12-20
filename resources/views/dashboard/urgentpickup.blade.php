@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid app-title m-0 shadow">
        <h2>Urgent Pick-Up</h2>
    </div>

    {{-- Content --}}
    <div class="container mt-5 container-ur-pickup bg-light p-3 shadow">
       <div class="btn-wrapper-ur d-flex w-100 flex-row bg-light mb-4">
            <button class="btn btn-up-cat">
                <span class="me-5">Recent </span><img src="{{ asset('img\pickupstatus\urgent\mdi_recent.svg') }}" alt="">
            </button>
            <div class="dropdown rounded-20 bg-inactive">
                <button class="btn btn-up-cat-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="me-5">Status </span><img src="{{ asset('img\pickupstatus\urgent\Vector (7).svg') }}" alt="">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
              <div class="dropdown rounded-20 bg-inactive   ">
                <button class="btn btn-up-cat-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="me-5">Locations</span><img src="{{ asset('img\pickupstatus\urgent\basil_location-outline.svg') }}" alt="">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>

              <p class="text-driver-online">1.203 drivers active now.</p>
       </div>

       <div class="card-wrapper-urgent-pickup">
            <div class="indiv-card-urgent d-flex flex-row justify-content-space-between align-items-center w-100 mb-3">
                <div class="w-50 d-flex flex-row justify-content-start align-items-center gap-5">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="d-flex flex-column">
                        <h3 class="w-100">Satria Mahathir</h3>
                        <p class="w-100">Jl. Belalang Mati 123</p>
                    </div>
                </div>
                <div class="w-50 d-flex flex-row justify-content-end align-items-center gap-3">
                    <div class="d-flex flex-column">
                        <h4 class="w-100">09.30 pm</h4>
                        <p class="w-100 ur-waiting">Waiting</p>
                    </div>
    
                    <div class="line-urgent"></div>
    
                    <button class="btn btn-warning btn-urpickup">
                        Assign Driver
                    </button>
                </div>
            </div>

            <div class="indiv-card-urgent d-flex flex-row justify-content-space-between align-items-center w-100">
                <div class="w-50 d-flex flex-row justify-content-start align-items-center gap-5">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="d-flex flex-column">
                        <h3 class="w-100">Satria Mahathir</h3>
                        <p class="w-100">Jl. Belalang Mati 123</p>
                    </div>
                </div>
                <div class="w-50 d-flex flex-row justify-content-end align-items-center gap-3">
                    <div class="d-flex flex-column">
                        <h4 class="w-100">09.30 pm</h4>
                        <p class="w-100 ur-completed">Taken</p>
                    </div>
    
                    <div class="line-urgent"></div>
    
                    <button class="btn btn-warning btn-urpickup-completed">
                        Assign Driver
                    </button>
                </div>
            </div>
       </div>
    </div>

</div>
@endsection