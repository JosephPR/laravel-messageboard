<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
   <a class="heading" href='/'>   <h1 >Joseph Reilly</h1> </a>
    @yield('content')
  </body>
  <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
</html>
