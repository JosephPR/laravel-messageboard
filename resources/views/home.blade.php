@extends('master')

@section('title, Homepage')

@section('content')

Post a message:
<form action='/create' method='post'>
  <input type='text' name='title' placeholder='Title'/>
  <input type='text' name='content' placeholder='Content'/>
  {{ csrf_field()}}
  <button type='submit'>Submit</button>
</form>
<br/>


Recent Messages:
<ul>
  @foreach($messages as $message)
  <li>
    <a href='/message/{{ $message->id }}'>{{ $message->title }}</a> -
     {{ $message->content }} -
     {{ $message->created_at->diffForHumans() }}
  </li>
  @endforeach
</ul>

@endsection
