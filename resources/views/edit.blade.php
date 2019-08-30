@extends('master')

@section('title, Homepage')

@section('content')

Edit a message:
<form action='/edit' method='post'>
  <input type='text' name='title' placeholder='Title'/>
  <input type='text' name='content' placeholder='Content'/>
  {{ csrf_field()}}
  <button class='button' type='submit'>Submit</button>
</form>
<br/>
