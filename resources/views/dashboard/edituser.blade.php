@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <form action="/edituser/put" method="POST">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
    <h1 class="form-title">EDIT USER DATA</h1>
    @error('phone_number')
    <div class="alert alert-danger ms-3 me-3 d-flex align-items-center" role="alert">
        <p class="m-0">Phone number must be 11 - 13 digits</p>
    </div>
    @enderror
    <hr class="line-au">
    <div class="form">
        
        <div class="form-control">
            <h2 class="input-name">Name</h2>
            <input type="text" placeholder="Enter your full name" name="name" value="{{ $user->name }}">
            <h2 class="input-name">Email</h2>
            <input type="email" placeholder="Enter a valid email address" name="email" value="{{ $user->email }}">
            <h2 class="input-name">RT</h2>
            <input type="number" name="rt" id="rt" value="{{ $user->rt }}">
        </div>
        <div class="form-control">
            <h2 class="input-name">Phone Number</h2>
            <input type="tel" placeholder="Enter your phone number (11-13 digits)" name="phone_number" pattern="[0-9]{11,13}" title="Please enter a phone number between 11-13 digits" required value="{{ $user->phone_number }}">            <h2 class="input-name">Street Name</h2>
            <input type="text" placeholder="Enter your street name here" name="street_name" value="{{ $user->street_name }}">
            
            <h2 class="input-name">RW</h2>
            <input type="number" name="rw" id="rw" value="{{ $user->rw }}">
        </div>
        
    </div>
    <div class="submit-wrapper">
        <button class="submit-button">Submit</button>
    </div>
</form>
</div>
    
@endsection