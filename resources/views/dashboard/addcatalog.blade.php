@extends('layouts.index')

@section('content')
<div class="form-wrapper">
    <div class="form-header-catalog">
        <img src="{{ asset('img/back-catalog.png')}}" alt="">
        <h1 class="text-header">UPDATE ARTICLE</h1>
    </div>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Title</h2>
            <input type="text" value="">
            {{-- <input type="text"required placeholder="Enter bag code" value="{{ $trash->order->user->id }}" disabled> --}}
            <h2 class="input-name">Picture</h2>
                <div class="input-logo w-100">
                    <input class="form-control w-100" type="file" id="formFile">
                </div>
            <h2 class="input-name">Content</h2>
            <textarea name="" id="" cols="30" rows="10" class="content-article">
                
            </textarea>
            {{-- <input type="text" required placeholder="Enter a valid weight" value="{{ $trash->weight }}" name="weight"> --}}
        </div>
        <div class="form-control">
            <h2 class="input-name">Writer</h2>
            <input type="text" value="" name="">
        </div>
        <div class="button-catalog">
            <button type="submit" class="delete-button">Cancel</button>
            <button type="submit" class="submit-button">Save</button>
        </div>
    </div>
</div>

    
@endsection