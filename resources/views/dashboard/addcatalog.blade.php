@extends('layouts.index')

@section('content')
<form class="form-wrapper" method="POST" action="/submit-catalog">
    @csrf
    <div class="form-header-catalog">
        <img src="{{ asset('img/back-catalog.png')}}" alt="">
        <h1 class="text-header">ADD CATALOG</h1>
    </div>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Name</h2>
            <input type="text" name="title">
            <h2 class="input-name">Description</h2>
            <input type="text" name="description" id="">
            <h2 class="input-name">Logo</h2>
            <div class="input-logo">
                <input type="image" name="logo" id="">
            </div>
        </div>
        <div class="form-control">
            <h2 class="input-name">Points</h2>
            <input type="text" placeholder="0" value="" name="points">
        </div>
    </div>
    <div class="button-catalog">
        <div class="delete-wrapper">
            <button type="submit" class="delete-button">Cancel</button>
        </div>
        <div class="delete-wrapper">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </div>
</form>


    
@endsection