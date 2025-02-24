@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <div class="header-seepoints">
        <div class="account-information">
            <h3>Account Information</h3>
            <h3>Email : {{ $user->email }}</h3>
            <h3>Address : {{ $user->street_name }}</h3>
        </div>
        <div class="customer-points">
            <h3>Customer's Point</h3>
            <h2>{{ $user->name }}</h2>
        </div>
    </div>
    <div class="main-seepoints">
        <div class="column-title">
            <h2 class="column1">Trash History</h2>
            <h2 class="column2">Date/Time</h2>
            <h2 class="column3">Points</h2>
        </div>
        <div class="row-content">
            <div class="row1">
                <h2 class="column1">Plastic Bottle</h2>
                <h2 class="column2">20/12/2024 20:30:40</h2>
                <h2 class="column3">130</h2>
            </div>
            <div class="row2">
                <h2 class="column1">Plastic Bottle</h2>
                <h2 class="column2">20/12/2024 20:30:40</h2>
                <h2 class="column3">130</h2>
            </div>
            <div class="row3">
                <h2 class="column1">Plastic Bottle</h2>
                <h2 class="column2">20/12/2024 20:30:40</h2>
                <h2 class="column3">130</h2>
            </div>

        </div>
        {{-- <div class="row-content">
            <div class="column1">
                <h2 class="row1">Plastic Bottle</h2>
                <h2 class="row2">Plastic Bottle</h2>
                <h2 class="row3">Plastic Bottle</h2>
            </div>
            <div class="column2">
                <h2 class="row1">20/12/2024 20:30:40</h2>
                <h2 class="row2">20/12/2024 20:30:40</h2>
                <h2 class="row3">20/12/2024 20:30:40</h2>
            </div>
            <div class="column3">
                <h2 class="row1">130</h2>
                <h2 class="row2">130</h2>
                <h2 class="row3">130</h2>
            </div> --}}
        </div>

    </div>
    
    
    
</div>


@endsection