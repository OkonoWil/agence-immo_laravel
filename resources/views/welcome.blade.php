<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @auth
    <div>
        <span>{{Auth::user()->name}}</span>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>

    </div>
    @else
    <a href="{{route('getLogin')}}">Se connecter</a>
    <a href="{{route('getRegister')}}">Créer un compte</a>
    @endauth
</body>

</html>