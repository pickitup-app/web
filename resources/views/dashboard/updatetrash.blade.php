@extends('layouts.index')

@section('content')

<form method="post" action="/updatetrash/post/{{ $trash->id }}" class="form-wrapper">
    @csrf
    <div class="form-header">
        <div class="form-title">
            <h1 class="text-header">UPDATE TRASH</h1>
        </div>
        <div class="customer-info">
            <h3 class="text-header">Customer Info : </h3>
            <h3 class="text-header">{{ $trash->order->user->name }} [{{ $trash->order->user->phone_number }}]</h3>
        </div>
    </div>
    <hr class="line-au">
    <div class="form">
        <div class="form-control">
            <h2 class="input-name">Bag ID</h2>
            <input type="text"required placeholder="Enter bag code" value="{{ $trash->order->user->id }}" disabled>
            <h2 class="input-name">Input Weight</h2>
            <input type="text" required placeholder="Enter a valid weight" value="{{ $trash->weight }}" name="weight">
        </div>
        <div class="form-control type">
            <h2 class="input-name">Type</h2>
            <select class="form-select" name="category" required name="category">
                <option value="">-- Select Trash Type --</option>
                <option value="Plastic" {{ $trash->category == 'Plastic' ? 'selected' : '' }}>Plastic</option>
                <option value="Paper" {{ $trash->category == 'Paper' ? 'selected' : '' }}>Paper</option>
                <option value="Glass" {{ $trash->category == 'Glass' ? 'selected' : '' }}>Glass</option>
                <option value="Metal" {{ $trash->category == 'Metal' ? 'selected' : '' }}>Metal</option>
                <option value="Organic" {{ $trash->category == 'Organic' ? 'selected' : '' }}>Organic</option>
                <option value="Electronic" {{ $trash->category == 'Electronic' ? 'selected' : '' }}>Electronic</option>
                <option value="Hazardous" {{ $trash->category == 'Hazardous' ? 'selected' : '' }}>Hazardous</option>
                <option value="Others" {{ $trash->category == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
            <h2 class="input-name">Points</h2>
            <input type="text" placeholder="0" value="" readonly name="point">
        </div>
    </div>
    <div class="submit-wrapper">
        <button type="submit" class="submit-button">Submit</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the weight input and points input elements
    const weightInput = document.querySelector('input[placeholder="Enter a valid weight"]');
    const pointsInput = document.querySelector('input[placeholder="0"][readonly]');
    
    // Function to calculate and update points
    function calculatePoints() {
        const weight = parseFloat(weightInput.value) || 0;
        const points = weight * 10;
        pointsInput.value = points.toFixed(0); // Display points as whole number
    }
    
    // Calculate points on page load to show initial value
    calculatePoints();
    
    // Add event listener to weight input to recalculate points when weight changes
    weightInput.addEventListener('input', calculatePoints);
});
</script>
    
@endsection