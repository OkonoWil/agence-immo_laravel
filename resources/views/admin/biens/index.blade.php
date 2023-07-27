@extends('layouts.base')

@section('tilte', 'Admin')

@section('content')
<div class="m-5 w-full flex flex-col items-center max-w-3xl">
    <div class="text-gray-500 font-bold text-xl w-full">
        Listes des biens
    </div>
    <div class="w-full flex flex-row justify-end">
        <a href="{{route('biens.create')}}"
            class="border border-green-300 rounded-md text-white font-bold my-3 p-2 bg-green-400 hover:bg-green-600">Ajouter
            une
            bien</a>
    </div>
    <div class="w-full m-3 bg-gray-50">
        <div class=" text-lg mx-4 my-2 font-semibold flex flex-row justify-between">
            <div class="">
                Nom
            </div>
            <div>
                Actions
            </div>
        </div>
        @php $i = 0; @endphp
        @forelse ($biens as $bien)
        <div class="flex flex-row justify-between">
            <div>
                {{$bien->libelle}}
            </div>
            <div>
                <a class="bg-green-500 p-3 m-2" href="{{route('biens.edit', ['id' => $bien->id])}}">Edit</a>
            </div>
            <div>
                <form action="{{route('biens.delete', ['id' => $bien->id])}}" method="post">
                    <input class="bg-red-500 p-3 m-2" type="submit" value="Delete">
                </form>
            </div>
        </div>
        @empty
        <div class="flex flex-row justify-center m-5">
            Aucune bien
        </div>
        @endforelse
    </div>
</div>

@endsection