<div>
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
</div>