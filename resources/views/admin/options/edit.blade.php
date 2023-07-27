@extends('layouts.base')

@section('tilte', 'Admin')

@section('content')
<div class="m-5 w-full flex flex-col items-center max-w-3xl">
    <div class="text-gray-500 font-bold text-xl w-full">
        Modifier option
    </div>
    <div class="w-full m-3 bg-gray-50">
        <div class=" text-lg mx-4 my-2 font-semibold flex flex-row justify-between">
            <form action="{{route('options.update', ['option'=> $option])}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="libelle">Libelle</label>
                    <input class="border border-gray-200" type="text" name="libelle" id="libelle"
                        value="{{$option->libelle}}">
                </div>
                <div>
                    <input
                        class="border border-green-300 rounded-md text-white font-bold my-3 p-2 bg-green-400 hover:bg-green-600"
                        type="submit" value="Enregistrer">
                </div>
            </form>
        </div>

    </div>
</div>

@endsection