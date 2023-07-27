@extends('layouts.base')

@section('tilte', 'Admin')
@section('content')
<div class="m-5 w-full flex flex-col items-center max-w-3xl">
    <div class="text-gray-500 font-bold text-xl w-full">
        Listes des options
    </div>
    <div class="w-full flex flex-row justify-end">
        <a href="{{route('options.create')}}"
            class="border border-green-300 rounded-md text-white font-bold my-3 p-2 bg-green-400 hover:bg-green-600">Ajouter
            une
            option</a>
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
        @forelse ($options as $option)
        @php
        $i++;
        @endphp
        <div class="flex flex-row justify-between items-center @if($i%2==0)bg-gray-100 @endif">
            <div class="mx-3">
                {{$option->libelle}}
            </div>
            <div class="flex flex-row items-center">

                <div>
                    <a class="bg-green-500 text-white rounded-lg p-2 m-2"
                        href="{{route('options.edit', ['option' => $option])}}">Edit</a>
                </div>
                <div>
                    <form action="{{route('options.destroy', ['option' => $option])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="bg-red-500 text-white rounded-lg p-2 m-2" type="submit" value="Delete">
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="flex flex-row justify-center m-5">
            Aucune option
        </div>
        @endforelse
        <div>
            {{$options->links()}}
        </div>
    </div>
</div>
@endsection