<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- !!! THE LINE BELOW IS REQUIRED SO YOU CAN USE BOOTSTRAP !!! -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- !!! THE LINE ABOVE IS REQUIRED SO YOU CAN USE BOOTSTRAP !!! -->
</head>
<body>
        <div class="container">
          <div class="row">
            {{-- HEADER --}}
            <div class="container">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                  <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                      <img src="/storage/images/assets/15710504898649f93190a5626de1a74c.jpg" alt="" height="50">
                    </a>
                  </div>

                  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2">About Us</a></li>
                    <li><a href="#" class="nav-link px-2">Petshop</a></li>
                    <li><a href="#" class="nav-link px-2">Groom</a></li>
                    <li><a href="#" class="nav-link px-2">Clinic</a></li>
                  </ul>

                  <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button>
                  </div>
                </header>
              </div>
          </div>
            <div class="row">
                <div class="col-12">@yield('content')</div>
            </div>
            <div class="row">
                <div class="col-12">FOOTER</div>
            </div>
        </div>
</body>
</html>
