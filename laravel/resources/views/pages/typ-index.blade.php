@extends('layouts.main-layout')
@section('content')
    <h1>Typologies</h1>
    <h3>Create a new <a href="{{route('typologies.create')}}">Typology</a></h3>
    <ul>
        @foreach ($types as $typ)
            <li>
                <a href="{{route('typologies.show', $typ -> id)}}">{{$typ-> name}}</a>
                <a href="{{route('typologies.edit', $typ -> id)}}">EDIT</a>
            </li>
        @endforeach
    </ul>
    <h1>Vai a <a href="{{route('home')}}">HOME</a></h1>
@endsection