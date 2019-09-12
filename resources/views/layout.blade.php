<!DOCTYPE html>

<html>

    <head>
        <title>@yield('title', 'My Web App')</title>
    </head>

    <body>

      <ul class="main-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>
      
      @yield('content')

    </body>

</html>
