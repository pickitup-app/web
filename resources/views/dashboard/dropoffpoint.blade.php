@extends('layouts.index')

@section('content')
<div class="header-dop">
    <div class="dop-title">
        <h2>Drop Off Point</h2>
    </div>
    <a href="/adddop">
        <div class="plus-button">
                <button><img src="{{asset('img/plus-icon.png')}}" alt=""></button>
        </div>
    </a>
</div>

<div class="content-dop-wrapper">
    @foreach($dropoffs as $dop)
    <div class="content-dop">
        <div class="column1-dop">   
            <img src="{{asset('img/locationicon-dop.png')}}" alt="">
        </div>
        <div class="column2-dop">   
            <h2>{{ $dop->name }}</h2>
            <h4>{{ $dop->id }}</h4>
        </div>
        <div class="edit-delete">

            <div class="column3-dop">
                <a href="/dropoffpoint/edit/{{ $dop->id }}">
                    <button>
                        <img src="{{asset('img/editicon-dop.png')}}" alt="">
                    </button>
                </a>
            </div>
            <div class="column4-dop">   
                <a href="/dropoffpoint/delete/{{ $dop->id }}">
                    <button>
                        <img src="{{asset('img/deleteicon-dop.png')}}" alt="">
                    </button>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection