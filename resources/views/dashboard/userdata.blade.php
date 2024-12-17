@extends('layouts.index')

@section('content')
    <div class="user-data-text">
        <h2>User Data</h2>
    </div>

    <div class="data-wrapper">
        <div class="header-data">
            <div class="search-section">
                <input type="text" placeholder="Search here...">
                <button>
                    <img src="{{asset('img/search-icon.png')}}" alt="search-icon">
                </button>
            </div>
            <div class="add-new-user">
                <h3>Add New User</h3>
                <div class="add-icon">
                    <img src="{{asset('img/add-icon.png')}}" alt="add-icon">
                </div>
            </div>

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
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>

                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                    <td class="data-font"><button class="data-button btn points-button">See points..</button></td>
                </tr>
            </table>
        </div>
    </div>


@endsection