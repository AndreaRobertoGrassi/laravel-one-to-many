@extends('layouts.main-layout')
@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{route('task-show', $task -> id)}}">
                    {{$task-> title}}
                </a>
                
            </li>
        @endforeach
    </ul>    
    <h1>Vai a <a href="{{route('typ-index')}}">Typologies</a></h1>
@endsection