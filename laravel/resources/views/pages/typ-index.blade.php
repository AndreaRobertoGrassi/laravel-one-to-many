@extends('layouts.main-layout')
@section('content')
<h1>Typologies</h1>
    <ul>
        @foreach ($types as $typ)
            <li>
                <a href="{{route('typologies.show', $typ -> id)}}">{{$typ-> name}}</a>
            </li>
        @endforeach
    </ul>
@endsection