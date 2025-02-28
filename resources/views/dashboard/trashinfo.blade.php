@extends('layouts.index')

@section('content')
<div class="user-data-text">
    <h2>Trash Info</h2>
</div>

<div class="data-wrapper">
    <div class="table-wrapper">
        <table class="table table-striped table-hover table-trash">
            <th>
                <td class="fw-bold header-font">ID</td>
                <td class="fw-bold header-font">Name</td>
                <td class="fw-bold header-font">Type</td>
                <td class="fw-bold header-font">Weight</td>
                <td class="fw-bold header-font">Input</td>
            </th>
            @foreach ($trashes as $trash)
            <tr>
                <td></td>
                <td class="data-font">{{ $trash->id }}</td>
                <td class="data-font">{{ $trash->order->user->name }}</td>
                <td class="data-font">{{ "Pick Up" }}</td>
                <td class="data-font">{{ $trash->point }}</td>
                @if ($trash->weight != 0)
                <td class="data-font"><a href="/"><button class="data-button btn points-button inactive">Saved</button></a></td>
                @else
                <td class="data-font"><a href="/updatetrash/{{ $trash->id }}"><button class="data-button btn points-button">Input now..</button></a></td>
                @endif
            </tr>
            @endforeach
            
        </table>
    </div>
</div>

@endsection