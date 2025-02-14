@extends('layouts.index')

@section('content')
    <div class="user-data-text shadow">
        <h2>Pick-Up Schedule</h2>
    </div>

    <div class="data-wrapper-pickup">
        <div class="header-data-pickup">
            <div class="search-section-pickup">
                <input type="text" placeholder="Search Name">
                <button>
                    <img src="{{asset('img/search-icon.png')}}" alt="search-icon">
                </button>
            </div>
            <div class="level-section">
                <div class="dropdown level">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('img/location-icon.png')}}" alt="">
                        <h5>Level</h5>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item active" href="#">Bali</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">DKI Jakarta</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Jawa Barat</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Jawa Timur</a></li>
                    </ul>
                  </div>
            </div>
        </div>
        <div class="content-wrapper-pickup">
            <div class="list-user-pickup">
            @foreach ($users as $usera)
            <a href="/pickupschedule/{{ $usera->id }}" style="text-decoration: none; color: black;">
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">{{ $usera->name }}</h2>
                        <h4 class="phone">{{ $usera->phone_number }}</h4>
                    </div>
                </div>
            </a>
            @endforeach


            </div>
            <div class="detail-user-pickup">
                <div class="detail-profile">
                    <div class="name-number">
                        <h2>{{ $user->name }}</h2>
                        <h4>{{ $user->phone_number }}</h4>
                    </div>
                    <div class="profpic">
                        <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    </div>
                </div>
                <div class="list-schedule">
                    @foreach ($orders as $order)
                    <div class="{{ $order->status==="completed"? 'detail-schedule1' : 'detail-schedule' }}">
                        <div class="date-type">
                            <h3>{{ $order->order_date }}</h3>
                            <h3>Regular Pick Up Schedule</h3>
                        </div>
                        @if ($order->accepted_at!=null)
                        <div class="status-pickup">
                            <h2> Done</h2>
                            <img src="{{ asset('img/done-icon.png') }}" alt="done-icon">
                        </div>
                        @endif
                        @if ($order->picked_up_at!=null)
                        <a href="" class="btn btn-warning">Picked Up at 09.00</a>
                        @elseif ($order->driver_id == null)
                        <a href="/assigndriver/{{ $order->id }}" class="btn btn-warning">Assign Driver</a>
                        @else
                        <a href="/assigndriver/{{ $order->id }}" class="btn btn-warning">Driver Assigned</a>
                        @endif
                    </div>
                    @endforeach
                    <div class="detail-schedule">
                        <div class="date-type">
                            <h3>1 December 2024</h3>
                            <h3>Regular Pick Up Schedule</h3>
                        </div>
                        <div class="status-pickup">
                            {{-- <h2>Done</h2>
                            <img src="{{ asset('img/done-icon.png') }}" alt="done-icon"> --}}
                        </div>
                    </div>
                    <div class="detail-schedule">
                        <div class="date-type">
                            <h3>1 December 2024</h3>
                            <h3>Regular Pick Up Schedule</h3>
                        </div>
                        <div class="status-pickup">
                            {{-- <h2>Done</h2>
                            <img src="{{ asset('img/done-icon.png') }}" alt="done-icon"> --}}
                        </div>
                    </div>

                </div>

            </div>
    </div>


@endsection