<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <title>Dropship - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.header')
    <main class="main">
        <div class="container-xxl d-flex h-100 pt-5">
            @yield('content')
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>
