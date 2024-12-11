<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Import Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Baloo Bhai 2 --}}
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&display=swap" rel="stylesheet">
    {{-- Be Vietnam Pro --}}
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid bg-login d-flex flex-row">
      <img src="{{ asset('img/Vector 29.svg') }}" alt="" class="stack-1">
      <img src="{{ asset('img/Vector 30.svg') }}" alt="" class="stack-2">
      <img src="{{ asset('img/Vector 31.svg') }}" alt="" class="stack-3">

      <div class="container login-container">
          <div class="login-wrapper">
            <h2 class="log-title">Login</h2>
            <p>Please enter your login details to log in.</p>
            <hr class="login-bar" />
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address:</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Password:</label>
            </div>
          </div>
          <div class="d-flex flex-row align-items-center">
            <input class="form-check-input mt-0 me-2" type="checkbox" value="" aria-label="Checkbox for following text input">
            <label for="">Keep me logged in</label>
          </div>
          <button class="btn btn-primary">Log In</button>
        
      </div>

    </div>
    <img src="{{ asset('img/Logo.png') }}" alt="" class="bottom-logo">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>