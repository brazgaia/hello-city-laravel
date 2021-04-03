<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>


    </head>
    <body>

          @yield('content')


        <footer>

          <p>
            &copy; Promessevidéo {{ date('M Y')}}-Tous droits réservés &middot;<a href="/about-fr">About Fr
          </p>

        </footer>

    </body>
</html>
