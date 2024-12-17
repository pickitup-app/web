@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <h1 class="form-title">EDIT DROP-OFF POINT</h1>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Street Address</h2>
            <input type="text" placeholder="Enter your street address">
            <h2 class="input-name">RW</h2>
            <input type="text" placeholder="Enter your community unit">
        </div>
        <div class="form-control">
            <h2 class="input-name">RT</h2>
            <input type="text" placeholder="Enter your neighborhood unit">
            <h2 class="input-name">Postal Code</h2>
            <input type="text" placeholder="Enter your area postal code">
        </div>
    </div>
    <div class="submit-wrapper">
        <button class="submit-button">Submit</button>
    </div>
</div>
    
@endsection