@extends('auth.layouts.auth')
@section('title', 'register')
@section('title-center', 'Créer un compte')

@section('content')
<form action="{{route('register')}}" method="post">
    @csrf
    <div class="flex flex-row justify-between text-xl mt-2 mb-4 min-w-[350px]">
        <label for="name" class="text-xl text-gray-600 block">Nom :</label>
        <input type="name" name="name" id="name"
            class="border w-60 ml-2 h-9 px-3 py-2 bg-white shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 rounded-md sm:text-sm focus:ring-1">
    </div>
    <div class="flex flex-row justify-between text-xl mt-2 mb-4 min-w-[350px]">
        <label for="email" class="text-xl text-gray-600 block">Email :</label>
        <input type="email" name="email" id="email"
            class="border w-60 ml-2 h-9 px-3 py-2 bg-white shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 rounded-md sm:text-sm focus:ring-1">
    </div>
    <div class="flex flex-row justify-between mt-4 mb-2">
        <label for="email" class="text-xl text-gray-600">Password :</label>
        <input type="password" name="password" id="password"
            class="border w-60 ml-2 h-9 px-3 py-2 bg-white shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md sm:text-sm focus:ring-1">
    </div>
    <div class="flex flex-row justify-between mt-4 mb-2">
        <label for="email" class="text-xl text-gray-600">Confirm Password :</label>
        <input type="password" name="password_confirmation" id="password"
            class="border w-60 ml-2 h-9 px-3 py-2 bg-white shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md sm:text-sm focus:ring-1">
    </div>
    <div class="text-gray-600 flex justify-center my-3">
        <span>J'ai déjà un compte <a class=" text-blue-400" href="{{route('getLogin')}}">se connecter
            </a></span>
    </div>
    <div class="flex justify-end">
        <input type="submit" value="Enregistrer" class="text-white bg-green-400 text-xl font-bold p-2 rounded-lg ">
    </div>
</form>
<ul>
    @forelse ($errors->all() as $error)
    <li>{{ $error }}</li>

    @empty

    @endforelse

</ul>
@endsection