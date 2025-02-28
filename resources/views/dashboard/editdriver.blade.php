@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <h1 class="form-title">EDIT DRIVER DATA</h1>
    <hr class="line-au">
    <form action="/editdriver/post" method="post">
        <input type="hidden" name="id" value="{{$user->id}}">
        @csrf
        @method('put')
        <div class="form">
            <div class="form-control">
                <h2 class="input-name">Name</h2>
                <input type="text" placeholder="Enter your full name" name="name" value="{{ $user->name }}">
                <h2 class="input-name">Email</h2>
                <input type="text" placeholder="Enter a valid email address" name="email" value="{{ $user->email }}">
                <h2 class="input-name">RT</h2>
                <input type="text" placeholder="Enter your neighborhood unit" name="rt" value="{{ $user->rt }}">
            </div>
            <div class="form-control">
                <h2 class="input-name">Phone Number</h2>
                <input type="tel" placeholder="Enter your phone number (11-13 digits)" name="phone_number" pattern="[0-9]{11,13}" title="Please enter a phone number between 11-13 digits" required value="{{ $user->phone_number }}">                
                <h2 class="input-name">Street Name</h2>
                <input type="text" placeholder="Enter your street name" name="street_name" value="{{ $user->street_name }}">
                <h2 class="input-name">RW</h2>
                <input type="text" placeholder="Enter your community unit" name="rw" value="{{ $user->rw }}">
            </div>
        </div>
        <div class="submit-wrapper">
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
    <div class="submit-wrapper">
        <button class="submit-button">Submit</button>
    </div>
</div>
    
@endsection