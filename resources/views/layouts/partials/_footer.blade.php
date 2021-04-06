<footer>
    <p class="text-gray-500">
      &copy; Promessevidéo {{ date('M Y')}}-Tous droits réservés

      @if(! Route::is('about'))
      &middot; <a href="{{ route('about') }}" class="text-indigo-300
      hover:text-indigo-700 underline">About Fr</a>
      @endif
    </p>
</footer>
