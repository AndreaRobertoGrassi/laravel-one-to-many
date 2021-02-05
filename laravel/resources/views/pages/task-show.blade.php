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
                {{$typology-> name}}
                {{$typology-> description}}
            </li>
        @endforeach
    </ul>
    
@endsection