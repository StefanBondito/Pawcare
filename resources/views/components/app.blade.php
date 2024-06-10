{{-- General Master layout --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    {{-- import css & js --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" href="{{ url('/storage/images/assets/Logo.png') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- !!! THE LINE BELOW IS REQUIRED SO YOU CAN USE BOOTSTRAP !!! -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- !!! THE LINE ABOVE IS REQUIRED SO YOU CAN USE BOOTSTRAP !!! -->
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
            <main>
                {{ $slot }}
            </main>
    </div>
</body>

</html>
