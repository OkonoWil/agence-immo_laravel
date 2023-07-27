<div class="flex flex-row items-center">
    <span class="mx-1 text-xl font-bold">
        <a href="{{route('home')}}">AGENCE IMMO</a>
    </span>
    <ul class="flex flex-row">
        <li class="mx-1 ">
            <a href="{{route('home')}}">Home</a>
        </li>
        <li class="mx-1">
            <a href="{{route('boutique')}}">Nos biens</a>
        </li>
        @auth
        <li class="ml-3 mx-1">
            <a href="{{route('biens.index')}}">Biens</a>
        </li>
        <li class="mx-1">
            <a href="{{route('options.index')}}">Options</a>
        </li>
        @endauth
    </ul>
</div>