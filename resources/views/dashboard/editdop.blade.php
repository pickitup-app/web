@extends('layouts.index')

@section('content')

<form method="post" action="/dropoffpoint/edit/{{ $dropoff->id }}" class="form-wrapper">
    @csrf
    @method('put')
    <h1 class="form-title">EDIT DROP-OFF POINT</h1>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Drop Off Name:</h2>
            <input type="text" placeholder="Enter your drop off name" name="name" value="{{ $dropoff->name }}" required>
            
        </div>
        <div class="form-control">
            <h2 class="input-name">Street Address</h2>
            <input type="text" placeholder="Enter your street address" name="address" value="{{ $dropoff->address }}" required>
        </div>
    </div>
    <div class="submit-wrapper">
        <button type="submit" class="submit-button">Submit</button>
    </div>
</form>
    
@endsection