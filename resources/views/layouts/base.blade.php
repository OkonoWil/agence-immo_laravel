<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agence Immo - @yield('tilte')</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full">
    <div class="w-full flex flex-row justify-between bg-blue-400 text-white p-2">
        @include('partials.menu')
        @include('partials.connexion')
    </div>
    @if (session('success'))
    @include('partials.success')
    @endif
    <div class="flex flex-row justify-center w-screen">
        @yield('content')
    </div>
</body>

</html>