@extends('layouts.main-layout')
@section('content')

    <h1>
        title: {{$task -> title}} <br>
        name: {{$task -> employee -> name}} <br>
        lastname: {{$task -> employee -> lastname}}
    </h1>

    <h1>Typologies</h1>
    <ul>
        @foreach ($task -> typologies as $typology)
            <li>
                Name: {{$typology-> name}} <br>
                Description: {{$typology-> description}}
            </li>
        @endforeach
    </ul>

    <h1>Torna a <a href="{{route('tasks.index')}}">Task-index</a></h1>
    
@endsection