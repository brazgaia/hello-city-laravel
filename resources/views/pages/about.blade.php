@extends('app')

@section('title', 'About Fr |' . config('app.name'))


@section('content')

        <img src="{{ asset('images/apphoto.png') }}" alt="Appareil photo">

        <h1>About Fr | Hello from Laleu !</h1>

        <p>Built with &hearts; by promessevidéo.</p>

        <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>


@endsection
