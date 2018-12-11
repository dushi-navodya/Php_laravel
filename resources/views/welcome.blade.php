@extends('layout')


@section('content')
   <h1>Welcome to {{$foo}}Home Page</h1>
    <ul>
       @foreach($tasks as $task)
       <li>{{$task}}</li>
        @endforeach
    </ul>

@endsection

@section('footer')
    <h2>End of home</h2>
@endsection