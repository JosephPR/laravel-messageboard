

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class='container'>
      <div class="row">
          <div class="col-lg-8">
            @extends('master')


            @section('title', $message->title)

            @section('content')

            <h3>{{ $message->title }}</h3>
            <p>{{ $message->content }}</p>
            <hr>
            <a href='/message/{{$message->id}}/edit' class='btn btn-primary'>Edit</a>
          </div>
      </div>
    </div>
    @endsection
  </body>
</html>
