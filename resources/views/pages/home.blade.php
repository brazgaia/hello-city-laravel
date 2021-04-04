@extends('app')

@section('title', 'Home | Hello City')


@section('content')

        <img src="{{ asset('images/drapeau-normandie.jpg') }}" alt="Normandie flag">

        <h1>Home | Hello from Laleu !</h1>


        <p>It's currently {{ date('h:i A')}}</p>

@endsection
