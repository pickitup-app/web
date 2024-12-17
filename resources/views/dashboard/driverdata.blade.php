@extends('layouts.index')

@section('content')
    <div class="user-data-text">
        <h2>Driver Data</h2>
    </div>

    <div class="data-wrapper">
        <div class="header-data">
            <div class="search-section-driver">
                <input type="text" placeholder="Search here...">
                <button>
                    <img src="{{asset('img/search-icon.png')}}" alt="search-icon">
                </button>
            </div>
            <div class="area-section">
                <div class="dropdown province">
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
                  </div>

            </div>
            <div class="add-new-driver">
                <h3>Add New Driver</h3>
                <div class="add-icon">
                    <img src="{{asset('img/driver-icon.png')}}" alt="add-icon">
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
                    <td class="fw-bold header-font">Phone Number</td>
                    <td class="fw-bold header-font">Edit</td>
                    <td class="fw-bold header-font">Delete</td>
                </th>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="data-font">C-123</td>
                    <td class="data-font">Elisabeth</td>
                    <td class="data-font">Mango Street</td>
                    <td class="data-font">jonathan@gmail.com</td>
                    <td class="data-font">08123456789</td>
                    <td class="data-font"><button class="data-button edit-button"><img src="{{asset('img/edit-icon.png')}}" alt="edit-icon"></button></td>
                    <td class="data-font"><button class="data-button delete-button"><img src="{{asset('img/delete-icon.png')}}" alt="delete-icon"></button></td>
                </tr>

            </table>
        </div>
    </div>


@endsection