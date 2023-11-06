<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') :: {{ config('app.name') }}</title>
    @vite(['js/app.js'])
</head>
<body>
    <header id="AppHeader">
        <h1 class="brand">{{ config('app.name') }}</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
