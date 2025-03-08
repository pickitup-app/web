@extends('layouts.index')

@section('content')
<div class="form-wrapper">
    <div class="form-header-catalog">
        <img src="{{ asset('img/back-catalog.png')}}" alt="">
        <h1 class="text-header">UPDATE CATALOG</h1>
    </div>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Name</h2>
            <input type="text">
            {{-- <input type="text"required placeholder="Enter bag code" value="{{ $trash->order->user->id }}" disabled> --}}
            <h2 class="input-name">Description</h2>
            <input type="text" name="" id="">
            {{-- <input type="text" required placeholder="Enter a valid weight" value="{{ $trash->weight }}" name="weight"> --}}
            <h2 class="input-name">Logo</h2>
            <div class="input-logo">
                <input type="image" name="" id="">
            </div>
        </div>
        <div class="form-control">
            <h2 class="input-name">Points</h2>
            <input type="text" placeholder="0" value="" readonly name="point">
        </div>
    </div>
    <div class="button-catalog">
        <div class="delete-wrapper">
            <button type="submit" class="delete-button">Delete</button>
        </div>
        <div class="delete-wrapper">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </div>
</div>


    
@endsection