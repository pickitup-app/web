@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <h1 class="form-title">EDIT DRIVER DATA</h1>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Name</h2>
            <input type="text" placeholder="Enter your full name">
            <h2 class="input-name">Email</h2>
            <input type="text" placeholder="Enter a valid email address">
        </div>
        <div class="form-control">
            <h2 class="input-name">Phone Number</h2>
            <input type="text" placeholder="Enter your phone number">
            <h2 class="input-name">Area</h2>
            <input type="text" placeholder="House number, street name, and postal">
        </div>
    </div>
    <div class="submit-wrapper">
        <button class="submit-button">Submit</button>
    </div>
</div>
    
@endsection