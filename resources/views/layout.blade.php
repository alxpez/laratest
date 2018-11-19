<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <title>@yield('title', 'Laratest')</title>
        
    </head>
    <body>
        <div>
           @yield('content')

          <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
    </body>
</html>
