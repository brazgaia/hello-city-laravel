@extends('app')

@section('title', 'Home | Hello City')


@section('content')

        <h1>Home | Hello from Laleu !</h1>


        <p>It's currently {{ date('h:i A')}}</p>

@endsection
