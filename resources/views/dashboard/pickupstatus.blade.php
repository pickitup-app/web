@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid app-title m-0 shadow">
        <h2>Pick-Up Status</h2>
    </div>
    
    <div class="container-fluid app-content">
        <div class="w-100 outer-content">
            <div class="child-wrapper">
                <div class="child-card"><h2>Halo</h2></div>
                <div class="child-card"><h2>Dunia</h2></div>
            </div>
            <div class="child-wrapper d-flex flex-column">
                <div class="child-card-col"><h2>Halo</h2></div>
                <div class="child-card-col"><h2>Pickup</h2></div>
            </div>
        </div>
    </div>
</div>
@endsection