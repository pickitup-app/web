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
                <td class="data-font">C-112</td>
                <td class="data-font">Mellisa Christy</td>
                <td class="data-font">Drop-Off</td>
                <td class="data-font">-</td>
                <td class="data-font"><button class="data-button btn points-button">Input now..</button></td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>

@endsection