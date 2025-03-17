@extends('layouts.index')

@section('content')
<div class="form-wrapper">
    <div class="form-header-catalog">
        <img src="{{ asset('img/back-catalog.png')}}" alt="">
        <h1 class="text-header">UPDATE CATALOG</h1>
    </div>
    <hr class="line-au">
    <div class="form d-flex flex-column">
        <div class="d-flex flex-row w-100">
            <div class="form-control form-control-catalog">
                <h2 class="input-name">Name</h2>
                <input type="text" value="{{ $catalog->title }}">
                {{-- <input type="text"required placeholder="Enter bag code" value="{{ $trash->order->user->id }}" disabled> --}}
                <h2 class="input-name">Description</h2>
                <input type="text" name="" id="">
                {{-- <input type="text" required placeholder="Enter a valid weight" value="{{ $trash->weight }}" name="weight"> --}}
                <h2 class="input-name">Logo</h2>
                <h2 class="input-name">Picture</h2>
                <div class="input-logo w-100">
                    <input class="form-control w-100" type="file" id="formFile">
                </div>
            </div>
            <div class="form-control form-control-catalog">
                <h2 class="input-name">Points</h2>
                <input type="text" placeholder="0" value="" name="point">
            </div>
        </div>
        <div class="form-control form-control-catalog">
            <h2 class="input-name">Terms & Condition</h2>
            <div class="input-tnc">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <h2 class="input-name">How To Use</h2>
            <div class="input-htu">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="button-catalog">
                <div class="delete-wrapper">
                    <button type="submit" class="delete-button">Cancel</button>
                </div>
                <div class="delete-wrapper">
                    <button type="submit" class="cat-button">Save</button>
                </div>
            </div>
        </div>
    </div>
    
</div>


    
@endsection