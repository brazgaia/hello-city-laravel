@extends('layouts/app' , ['title' => 'Help'])

@section('content')

  <h1 class="py-5 text-3xl sm:text-5xl font-semibold text-pink-500">Help</h1>

  <p class="py-7 m-3 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
     vmagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     vconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   </p>

   <p>
     <a href="{{ route('home') }}" class="text-indigo-300 hover:text-indigo-700 underline"
     >Revenir à la page d'accueil</a>
   </p>

@endsection
