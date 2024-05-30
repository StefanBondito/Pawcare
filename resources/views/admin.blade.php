<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- !!! THE LINE BELOW IS REQUIRED SO YOU CAN USE BOOTSTRAP !!! -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
          <div class="row">
            <div class="col">

                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Sidebar</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Products
                            </a>
                        </li>
                        </ul>
                        <hr>

                </div>
            </div>
            <div class="col">
                @yield('content')
            </div>
</body>
</html>
