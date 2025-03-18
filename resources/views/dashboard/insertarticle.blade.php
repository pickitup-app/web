@extends('layouts.index')

@section('content')
<form class="form-wrapper" enctype="multipart/form-data" method="POST" action="/article/add">
    @csrf
    <div class="form-header-catalog">
        <img src="{{ asset('img/back-catalog.png')}}" alt="">
        <h1 class="text-header">ADD ARTICLE</h1>
    </div>
    <hr class="line-au">
    <div class="form flex flex-column">
        <div class="d-flex flex-row">
            <div class="form-control">
                <h2 class="input-name">Title</h2>
                <input type="text" name="title">
                {{-- <input type="text"required placeholder="Enter bag code" value="{{ $trash->order->user->id }}" disabled> --}}
                <h2 class="input-name">Picture</h2>
                <div class="input-logo w-100">
                    <input class="form-control w-100" type="file" id="formFile" name="picture">
                </div>
                {{-- <input type="text" required placeholder="Enter a valid weight" value="{{ $trash->weight }}" name="weight"> --}}
            </div>
            <div class="form-control">
                <h2 class="input-name">Writer</h2>
                <input type="text" value="" name="writer">
            </div>
            
        </div>
        
        <div class="input-htu">
            <h2 class="input-name">Content</h2>
            <textarea name="content" id="" cols="30" rows="10" class="content-article"></textarea>
        </div>
    </div>
    <div class="button-catalog pe-2 pb-2">
        <button type="submit" class="submit-button">Save</button>
    </div>
</form>

    
@endsection