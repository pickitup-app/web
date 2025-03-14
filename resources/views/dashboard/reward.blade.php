@extends('layouts.index')

@section('content')
<div class="user-data-text">
    <h2>Rewards Catalogue</h2>
    <div class="reward-header">
        <div class="reward-header-add">
            <a href="/addcatalog">
                <button class="reward-button-add">
                    <img src="{{ asset('img/add-reward.png')}}" alt="">
                </button>
            </a>
        </div>
        <div class="reward-header-text">
            <h2>Customer's Reward</h2>
        </div>
    </div>
</div>


<div class="container wrapper-content reward-cwc">
    @foreach ($catalogs as $catalog)
    <div class="card-content d-flex flex-column shadow container-wrap-reward">
        <div class="reward-card-img">
            <img class="logo-reward" src="{{ asset('./img/logo-tuku.png') }}" alt="">
            <div class="edit-reward">
                <a href="/updatecatalog/{{ $catalog->id }}">
                    <img src="{{ asset('./img/edit-icon.png') }}" alt="">
                </a>
            </div>
        </div>
        <h3>{{ $catalog->title }}</h3>
        <p class="text-gray">{{ $catalog->description }}</p>
        <h1>{{ $catalog->points }}</h1>
    </div>
    @endforeach
    {{-- <div class="card-content d-flex flex-column shadow container-wrap-reward">
        <div class="reward-card-img">
            <img class="logo-reward" src="{{ asset('./img/logo-burgerking.png') }}" alt="">
            <div class="edit-reward">
                <img src="{{ asset('./img/edit-icon.png') }}" alt="">
            </div>
        </div>
        <h3>Burger King</h3>
        <p class="text-gray">20% off cheese burger</p>
        <h1>200 PTS</h1>
    </div>
    <div class="card-content d-flex flex-column shadow container-wrap-reward">
        <div class="reward-card-img">
            <img class="logo-reward" src="{{ asset('./img/logo-grab.png') }}" alt="">
            <div class="edit-reward">
                <img src="{{ asset('./img/edit-icon.png') }}" alt="">
            </div>
        </div>
        <h3>Grab</h3>
        <p class="text-gray">Voucher Rp10,000</p>
        <h1>200 PTS</h1>
    </div>
    <div class="card-content d-flex flex-column shadow container-wrap-reward">
        <div class="reward-card-img">
            <img class="logo-reward" src="{{ asset('./img/logo-chatime.png') }}" alt="">
            <div class="edit-reward">
                <img src="{{ asset('./img/edit-icon.png') }}" alt="">
            </div>
        </div>
        <h3>Chat Time</h3>
        <p class="text-gray">20% off milk tea</p>
        <h1>200 PTS</h1>
    </div> --}}
</div>

@endsection