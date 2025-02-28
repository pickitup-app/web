@extends('layouts.index')

@section('content')
    <div class="user-data-text shadow">
        <h2>User Data</h2>
    </div>
    
    <div class="data-wrapper">
        <div class="header-data">
            <form action="/userdata" method="get" class="search-section">
                @csrf
                <input type="text" placeholder="Search here..." name="search">
                <button type="submit">
                    <img src="{{asset('img/search-icon.png')}}" alt="search-icon">
                </button>
            </form>
            <a href="/adduser">
            <div class="add-new-user">
                
                <h3>Add New User</h3>
                    <div class="add-icon">
                    <img src="{{asset('img/add-icon.png')}}" alt="add-icon">
                </div>
                
            </div>
        </a>

        </div>
        <div class="table-wrapper">
            <table class="table table-striped table-hover">
                <th>
                    <td class="fw-bold header-font">ID</td>
                    <td class="fw-bold header-font">Name</td>
                    <td class="fw-bold header-font">Address</td>
                    <td class="fw-bold header-font">Email</td>
                    <td class="fw-bold header-font">Edit</td>
                    <td class="fw-bold header-font">Delete</td>
                    <td class="fw-bold header-font">Points</td>
                </th>
                @foreach ($users as $user)
                <tr>
                    <td></td>
                    <td class="data-font">{{ $user->id }}</td>
                    <td class="data-font">{{ $user->name }}</td>
                    <td class="data-font">{{ $user->street_name==null?"-": $user->street_name . ', RT ' . $user->rt . ', RW ' . $user->rw }}</td>
                    <td class="data-font">{{ $user->email }}</td>
                    <td class="data-font"><a class="data-button edit-button" href="/edituser/{{ $user->id }}" alt="edit-icon"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></a></td>
                    <td class="data-font"><button class="data-button delete-button" onclick="confirmDelete({{ $user->id }})"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><a class="data-button btn points-button" href="/see-points/{{ $user->id }}">See points..</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{-- href="/delete/{{ $user->id }} --}}
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
                window.location.href = "/delete/"+id;
            }
            });
        }
        
    </script>
@endsection