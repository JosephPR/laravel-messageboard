<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class='container'>
    @extends('master')

    @section('title, Homepage')

    @section('content')

    Post a message:
    <form action='/create' method='post'>
      <input type='text' name='title' placeholder='Title'/>
      <input type='text' name='content' placeholder='Content'/>
      {{ csrf_field()}}
      <button class='button' type='submit'>Submit</button>
    </form>
    <br/>



    Recent Messages:
    <ul>
      @foreach($messages as $message)
      <li>
        <a class='heading' href='/message/{{ $message->id }}'>{{ $message->title }}</a> -
         {{ $message->content }} -
         {{ $message->created_at->diffForHumans() }}
      </li>
      @endforeach
    </ul>
</div>
    @endsection
  </body>
  <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
</html>
