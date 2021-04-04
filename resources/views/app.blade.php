<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <title>@yield('title', config('app.name'))</title>

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">

          <main role="main" class="flex flex-col justify-center items-center">

              @yield('content')

          </main>

      <footer>
          <p class="text-gray-500">
            &copy; Promessevidéo {{ date('M Y')}}-Tous droits réservés

            @if(! Route::is('about'))
            &middot; <a href="{{ route('about') }}" class="text-indigo-300
            hover:text-indigo-700 underline">About Fr</a>
            @endif
          </p>
      </footer>

    </body>
</html>
