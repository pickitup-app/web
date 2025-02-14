@extends('layouts.index')

@section('content')
    <div class="assign-driver-wrapper">
        <h3 class="fw-bold">Assign Driver</h3>
        <h3 class="fw-bold mt-5">Customer Name: {{ $user->name }}</h3>
        <p>Scheduled for: {{ $order->order_date }}</p>
        <div class="w-50">
            <form action="/assigndriver/{{ $order->id }}/search" method="get">
                @csrf
                <div class="search-driver">
                    <input type="text" name="search" id="search-driver" placeholder="Search For Driver">
                    <button class="btn" type="submit">
                        <img src="{{ asset('img/pickupstatus/assigndriver/material-symbols_find-replace-rounded.svg') }}" alt="">
                    </button>
                </div>
            </form>
            <p class="text-right">Reload to find more drivers 
                <img src="{{ asset('img/pickupstatus/assigndriver/icon-park-solid_attention.svg') }}" alt="">
            </p>
        </div>
        
        <form id="assign-driver-form" method="post" action="/assigndriver/action/{{ $order->id }}">
            @csrf
            <!-- Hidden input untuk menyimpan driver_id -->
            <input type="hidden" name="driver_id" id="driver_id">
            @foreach ($drivers as $driver)
                <div class="driver-option" data-id="{{ $driver->id }}" onclick="selectDriver(this)">
                    <h3>{{ $driver->name }}</h3>
                </div>
            @endforeach
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        let selectedDriver = null; // Simpan driver yang dipilih

        function selectDriver(element) {
            // Hapus class 'selected' dari driver sebelumnya jika ada
            if (selectedDriver) {
                selectedDriver.classList.remove('selected');
            }

            // Set driver baru yang dipilih
            selectedDriver = element;
            selectedDriver.classList.add('selected');

            // Update nilai hidden input dengan id driver yang dipilih
            document.getElementById('driver_id').value = selectedDriver.getAttribute('data-id');
        }

        function handleSubmit(event) {
            event.preventDefault();

            if (!selectedDriver) {
                alert('Please select a driver!');
                return;
            }

            const driverId = selectedDriver.getAttribute('data-id');
            console.log('Selected Driver ID:', driverId);

            // Lanjutkan submit form
            event.target.submit();
        }
        
        // Jika ingin menggunakan handleSubmit pada submit form, 
        // ganti <form id="assign-driver-form" method="post" ...> dengan onsubmit="handleSubmit(event)"
        // dan pastikan submit hanya dilakukan bila driver sudah dipilih.
    </script>
@endsection