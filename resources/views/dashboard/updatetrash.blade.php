@extends('layouts.index')

@section('content')

<div class="form-wrapper">
    <div class="form-header">
        <div class="form-title">
            <h1 class="text-header">UPDATE TRASH</h1>
        </div>
        <div class="customer-info">
            <h3 class="text-header">Customer Info : </h3>
            <h3 class="text-header">Jonathan [0812-2345-2120]</h3>
        </div>
    </div>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Bag Code</h2>
            <input type="text" placeholder="Enter bag code">
            <h2 class="input-name">Input Weight</h2>
            <input type="text" placeholder="Enter a valid weight">
        </div>
        <div class="form-control type">
            <h2 class="input-name">Type</h2>
            <input type="text" placeholder="Enter trash type">
        </div>
    </div>
    <div class="submit-wrapper">
        <button class="submit-button">Submit</button>
    </div>
</div>
    
@endsection