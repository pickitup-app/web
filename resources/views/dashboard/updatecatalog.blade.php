@extends('layouts.index')

@section('content')
<form class="form-wrapper" enctype="multipart/form-data" method="POST" action="/catalog/update/{{ $catalog->id }}">
    @csrf
    @method('PUT')
    <div class="form-header-catalog">
        <img src="{{ asset('img/back-catalog.png')}}" alt="">
        <h1 class="text-header">UPDATE CATALOG</h1>
    </div>
    <hr class="line-au">
    <div class="form d-flex flex-column">
        <div class="d-flex flex-row w-100">
            <div class="form-control form-control-catalog">
                <h2 class="input-name">Name</h2>
                <input type="text" name="title" value="{{ $catalog->title }}">
                {{-- <input type="text"required placeholder="Enter bag code" value="{{ $trash->order->user->id }}" disabled> --}}
                <h2 class="input-name">Description</h2>
                <input type="text" name="description" id="" value="{{ $catalog->description }}">
                {{-- <input type="text" required placeholder="Enter a valid weight" value="{{ $trash->weight }}" name="weight"> --}}
                <h2 class="input-name">Logo</h2>
                <div class="input-logo w-100">
                    <input class="form-control w-100" type="file" id="formFile" name="logo" required>
                </div>
            </div>
            <div class="form-control form-control-catalog">
                <h2 class="input-name">Points</h2>
                <input type="number" placeholder="0" value="" name="points" value="{{ $catalog->points }}">
            </div>
        </div>
        <div class="form-control form-control-catalog">
            <h2 class="input-name">Terms & Condition</h2>
            <div class="input-tnc">
                <textarea name="termsandconditions" id="" cols="30" rows="10">{{ $catalog->termsandconditions }}</textarea>
            </div>
            <h2 class="input-name">How To Use</h2>
            <div class="input-htu">
                <textarea name="howtoredeem" id="howtoredeem" cols="30" rows="10">{{ $catalog->howtoredeem }}</textarea>
            </div>

            <div class="button-catalog">
                <div class="delete-wrapper">
                    <button type="button" class="delete-button" onclick="confirmDelete({{ $catalog->id }})">Delete</button>
                </div>
                <div class="delete-wrapper">
                    <button type="submit" class="cat-button">Save</button>
                </div>
            </div>
        </div>
    </div>
    
</form>

<script>
    function confirmDelete(id) {
        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
            });
            window.location.href = "/catalog/delete/"+id;
        }
        });
    }
</script>


    
@endsection