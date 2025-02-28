@extends('layouts.index')

@section('content')
    <div class="user-data-text">
        <h2>Driver Data</h2>
    </div>

    <div class="data-wrapper">
        <div class="header-data">
            <form action="/driverdata/search" method="get" class="search-section-driver">
                <input type="text" placeholder="Search here..." name="search">
                <button>
                    <img src="{{asset('img/search-icon.png')}}" alt="search-icon">
                </button>
            </form>
            <div class="area-section">
                {{-- <div class="dropdown province">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('img/location-icon.png')}}" alt="">
                        <h5>Province</h5>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item active" href="#">Bali</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">DKI Jakarta</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Jawa Barat</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Jawa Timur</a></li>
                    </ul>
                  </div>
                  <div class="dropdown area">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('img/location-icon.png')}}" alt="">
                        <h5>Area 22</h5>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item active" href="#">Action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>--}}
            </div>
            <div class="add-new-driver">
                <a href="/adddriver" class="d-flex flex-row align-items-center">
                    <h3 class="me-3">Add New Driver</h3>
                    <div class="add-icon">
                        <img src="{{asset('img/driver-icon.png')}}" alt="add-icon">
                    </div>
                </a>
            </div>

        </div>
        <div class="table-wrapper">
            <table class="table table-striped table-hover">
                <th>
                    <td class="fw-bold header-font">ID</td>
                    <td class="fw-bold header-font">Name</td>
                    <td class="fw-bold header-font">Address</td>
                    <td class="fw-bold header-font">Email</td>
                    <td class="fw-bold header-font">Phone Number</td>
                    <td class="fw-bold header-font">Edit</td>
                    <td class="fw-bold header-font">Delete</td>
                </th>
                @foreach ($drivers as $driver)
                <tr>
                    <td></td>
                    <td class="data-font">{{ $driver->id }}</td>
                    <td class="data-font">{{ $driver->name }}</td>
                    <td class="data-font">{{ $driver->street_name }}</td>
                    <td class="data-font">{{ $driver->email }}</td>
                    <td class="data-font">{{ $driver->phone_number }}</td>
                    <td class="data-font"><a href="/editdriver/{{ $driver->id }}"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></a></td>
                    <td class="data-font"><button class="data-button delete-button" onclick="confirmDelete({{ $driver->id }})"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                @endforeach
            </table>
        </div>
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
                window.location.href = "/deletedriver/"+id;
            }
            });
        }
        
    </script>

@endsection