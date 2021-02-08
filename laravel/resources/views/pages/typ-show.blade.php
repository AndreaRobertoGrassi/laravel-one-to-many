@extends('layouts.main-layout')
@section('content')
    <h1>Typology</h1>
    <h2>Name: {{$typ-> name}}</h2>
    <h2>Description: {{$typ-> description}}</h2>
    <h1>Tasks</h1>
    <ul>
        @foreach ($typ -> tasks as $task)
            <li>Title: {{$task -> title}}, <br> Priority: {{$task-> priority}}</li> <br>

        @endforeach
    </ul>
    <h1>Torna a <a href="{{route('typologies.index')}}">Typologies index</a></h1>

@endsection