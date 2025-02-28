@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <h1 class="form-title">ADD NEW USER</h1>
    @error('phone_number')
    <div class="alert alert-danger ms-3 me-3 d-flex align-items-center" role="alert">
        <p class="m-0">Phone number must be 11 - 13 digits and numeric</p>
    </div>
    @enderror
    <hr class="line-au">
    <form action="/adduser/post" method="POST">
        @csrf
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Name</h2>
            <input type="text" placeholder="Enter your full name" name="name" required>
            <h2 class="input-name">Email</h2>
            <input type="email" placeholder="Enter a valid email address" name="email" required>
            <h2 class="input-name">RT</h2>
            <input type="number" placeholder="Enter your neighborhood unit" name="rt" required>
            <h2 class="input-name">RW</h2>
            <input type="number" placeholder="Enter your community unit" name="rw" required>
        </div>
        <div class="form-control">
            <h2 class="input-name">Phone Number</h2>
            <input type="tel" placeholder="Enter your phone number (11-13 digits)" name="phone_number" pattern="[0-9]{11,13}" title="Please enter a phone number between 11-13 digits" required>            <input type="text" placeholder="House number, street name, and postal" name="street_name" required>
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