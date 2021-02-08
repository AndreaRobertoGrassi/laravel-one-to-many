@extends('layouts.main-layout')
@section('content')
    <h1>Tasks</h1>
    <h3>Create a new<a href="{{route('tasks.create')}}">Task</a></h3>
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{route('tasks.show', $task -> id)}}">
                    {{$task-> title}}
                </a>
                <a href="{{route('tasks.edit', $task -> id)}}"> EDIT</a>
                
            </li>
        @endforeach
    </ul>    
    <h1>Vai a <a href="{{route('home')}}">HOME</a></h1>
@endsection