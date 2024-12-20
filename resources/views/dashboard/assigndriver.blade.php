@extends('layouts.index')

@section('content')
    <div class="assign-driver-wrapper">
        <h3 class="fw-bold">Assign Driver</h3>
        <h3 class="fw-bold  mt-5">Customer Name: Jonathan</h3>

        <div class="w-50">
            <div class="search-driver">
                <input type="text" name="" id="search-driver" placeholder="Search For Driver">
                <img src="{{ asset('img\pickupstatus\assigndriver\material-symbols_find-replace-rounded.svg') }}" alt="">
            </div>
            <p class="text-right">Reload to find more drivers <img src="{{ asset('img\pickupstatus\assigndriver\icon-park-solid_attention.svg') }}" alt=""></p>
        </div>
        
        <form id="assign-driver-form" onsubmit="handleSubmit(event)">
            <div class="driver-option" data-id="1" onclick="selectDriver(this)">
                <h3>Driver 1</h3>
                <h4>3 km away</h4>
            </div>
            <div class="driver-option" data-id="2" onclick="selectDriver(this)">
              <h3>Driver 1</h3>
              <h4>3 km away</h4>
          </div>
          <div class="driver-option" data-id="3" onclick="selectDriver(this)">
            <h3>Driver 1</h3>
            <h4>3 km away</h4>
        </div>
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
        }

        function handleSubmit(event) {
            event.preventDefault();

            if (!selectedDriver) {
                alert('Please select a driver!');
                return;
            }

            const driverId = selectedDriver.getAttribute('data-id');
            alert('Selected Driver: ' + driverId);

            // Kirim data yang dipilih via POST
            console.log('Selected Driver ID:', driverId);
        }

        function searchDriver() {
            alert('Searching for drivers...');
            // Simulasikan reload atau proses fetch data
        }
    </script>
@endsection
