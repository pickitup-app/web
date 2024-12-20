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
        </div>
        <div class="content-wrapper-pickup">
            <div class="list-user-pickup">
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>
                <div class="side-user">
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    <div class="name-phone">
                        <h2 class="name">Jessica Mila</h2>
                        <h4 class="phone">0895-4141-4331</h4>
                    </div>
                </div>


            </div>
            <div class="detail-user-pickup">
                <div class="detail-profile">
                    <div class="name-number">
                        <h2>Jessica Mila</h2>
                        <h4>0895-4141-4331</h4>
                    </div>
                    <div class="profpic">
                        <img src="{{ asset('img/dummyprofile.png') }}" alt="">
                    </div>
                </div>
                <div class="list-schedule">
                    <div class="detail-schedule1">
                        <div class="date-type">
                            <h3>1 December 2024</h3>
                            <h3>Regular Pick Up Schedule</h3>
                        </div>
                        <div class="status-pickup">
                            <h2>Done</h2>
                            <img src="{{ asset('img/done-icon.png') }}" alt="done-icon">
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
    </div>


@endsection