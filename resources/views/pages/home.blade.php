@extends('layouts/app', ['title' => config('app.name')])



@section('content')

        <img src="{{ asset('images/drapeau-normandie.jpg') }}" alt="Normandie flag" class="mt-10 rounded shadow-md h-40">

        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-green-600">Home | Hello from Laleu !</h1>


        <p class="text-lg text-red-700">It's currently {{ date('h:i A')}}</p>

        <p>
          <a href="{{ route('help') }}" class="text-indigo-300 hover:text-indigo-700 underline"
          >Aller a la page help</a>
        </p>

@endsection
