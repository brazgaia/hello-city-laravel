@extends('app')

@section('title', 'About Fr |' . config('app.name'))


@section('content')

        <img src="{{ asset('images/apphoto.png') }}" alt="Appareil photo" class="my-12 rounded-full shadow-md h-40">

        <h1>About Fr | Hello from Laleu !</h1>

        <h2 class="mb-10 text-purple-500">
          Built with <span class="text-pink-500">&hearts;</span> by promessevidéo.
        </h2>

        <p>
          <a href="{{ route('home') }}" class="text-indigo-300 hover:text-indigo-700 underline"
          >Revenir à la page d'accueil</a>
        </p>


@endsection
