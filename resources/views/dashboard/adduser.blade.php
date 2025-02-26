@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <h1 class="form-title">ADD NEW USER</h1>
    <hr class="line-au">
    <form action="/adduser/post" method="POST">
        @csrf
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Name</h2>
            <input type="text" placeholder="Enter your full name" name="name">
            <h2 class="input-name">Email</h2>
            <input type="email" placeholder="Enter a valid email address" name="email">
        </div>
        <div class="form-control">
            <h2 class="input-name">Phone Number</h2>
            <input type="text" placeholder="Enter your phone number" name="phone_number">
            <h2 class="input-name">Address</h2>
            <input type="text" placeholder="House number, street name, and postal" name="address">
            <h2 class="input-name">Password</h2>
            <input type="text" name="password" value="{{ \Illuminate\Support\Str::random(20) }}" readonly>
        </div>
    </div>
    <div class="submit-wrapper">
        <button type="submit" class="submit-button">Submit</button>
    </div>
    </form>
</div>
    
@endsection