@extends('layouts.index')

@section('content')
<div class="user-data-text">
    <h2>Article</h2>
    <div class="reward-header-add">
        <a href="/insertarticle">
            <button class="reward-button-add">
                <img src="{{ asset('img/add-reward.png')}}" alt="">
            </button>
        </a>
    </div>
    
</div>

<div class="content-dop-wrapper">
    @foreach ($articles as $article)
    <div class="content-dop">
        <div class="column1-dop">   
            <img src="{{asset('img/article-icon.png')}}" alt="">
        </div>
        <div class="column2-dop">   
            <h2>{{ $article->title }}</h2>
            <h4>{{ $article->writer }}</h4>
        </div>
        <div class="edit-delete">

            <div class="column3-dop">
                <a href="/updatearticle/{{ $article->id }}">
                    <button>
                        <img src="{{asset('img/editicon-dop.png')}}" alt="">
                    </button>
                </a>
            </div>
            <div class="column4-dop"> 
                    <button onclick="confirmDelete({{ $article->id }})">
                        <img src="{{asset('img/deleteicon-dop.png')}}" alt="">
                    </button> 
            </div>
        </div>
    </div>
    @endforeach

    
</div>

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
            window.location.href = "/article/delete/"+id;
        }
        });
    }
</script>

    
@endsection

