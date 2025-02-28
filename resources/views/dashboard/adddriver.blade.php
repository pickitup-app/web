@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <h1 class="form-title">ADD NEW DRIVER</h1>
    <hr class="line-au">
    <form action="/adddriver/post" method="post">
        @csrf
        <div class="form">
            <div class="form-control">
                <h2 class="input-name">Name</h2>
                <input type="text" placeholder="Enter your full name" name="name" required>
                <h2 class="input-name">Email</h2>
                <input type="text" placeholder="Enter a valid email address" name="email" required>
                <h2 class="input-name">RT</h2>
                <input type="text" placeholder="Enter your neighborhood unit" name="rt" required>
                <h2 class="input-name">Password</h2>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-control">
                <h2 class="input-name">Phone Number</h2>
                <input type="tel" placeholder="Enter your phone number (11-13 digits)" name="phone_number" pattern="[0-9]{11,13}" title="Please enter a phone number between 11-13 digits" required>                <h2 class="input-name">Street Name</h2>
                <input type="text" placeholder="Enter your street name" name="street_name">
                <h2 class="input-name">RW</h2>
                <input type="text" placeholder="Enter your community unit" name="rw">
            </div>
        </div>
        <div class="submit-wrapper">
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
</div>
    
@endsection