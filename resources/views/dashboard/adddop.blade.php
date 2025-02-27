@extends('layouts.index')

@section('content')

<form method="post" action="/dropoffpoint/add/post" class="form-wrapper">
    @csrf
    <h1 class="form-title">ADD DROP-OFF POINT</h1>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Drop Off Name:</h2>
            <input type="text" placeholder="Enter your drop off name" name="name">
            
        </div>
        <div class="form-control">
            <h2 class="input-name">Street Address</h2>
            <input type="text" placeholder="Enter your street address" name="address">
        </div>
    </div>
    <div class="submit-wrapper">
        <button type="submit" class="submit-button">Submit</button>
    </div>
</form>
    
@endsection