<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pick It Up | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    {{-- Import Font Baloo Bhai 2 & Be Vietnam Pro --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body>
    @if (session('error'))
    <script>
      Swal.fire({
        title: "Wrong Credentials!",
        text: "{{ session('error') }}",
        icon: "error"
    });
    </script>
    @endif

    <div class="container-fluid bg-login">
        <img src="{{ asset('img/Vector 29.svg')}}" alt="" class="stack-1">
        <img src="{{ asset('img/Vector 30.svg')}}" alt="" class="stack-2">
        <img src="{{ asset('img/Vector 31.svg')}}" alt="" class="stack-3">
    
        <img src="{{asset('img/Topographic.svg')}}" alt="" class="topographic">
        <img src="{{asset('img/Logo.png')}}" alt="" class="logo">
    
        <div class="wrapper">
            <div class="container tab-login">
                <h2 class="login-title">Login</h2>
                <p class="login-desc">Please enter your login details to log in.</p>
                <hr class="line mt-4 mb-5">
                <form action="/login/post" method="POST">
                  @csrf
                  <div class="mb-4">
                      <input type="email" class="form-control text-light" placeholder="Email Address" name="email">
                  </div>
                  <div class="mb-3">
                      <input type="password" class="form-control text-light" id="floatingPassword" placeholder="Password" name="password">
                  </div>
                  
                  {{-- <div class="wrapper-text-login">
                    <input class="form-check-input mt-0 me-4" type="checkbox" value="" aria-label="Checkbox for following text input">
                    <label class="keep-login">Keep me logged in</label>
                  </div> --}}

                  <button type="submit" class="btn btn-primary btn-login">Log In</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

