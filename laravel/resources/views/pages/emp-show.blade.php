@extends('layouts.main-layout')
@section('content')
    <h1>Employee</h1>
    <h1>
        {{$employee-> name}}
        {{$employee-> lastname}}:
        {{$employee-> dateOfBirth}}
    </h1>
    
    <ul>
        @foreach ($employee -> tasks as $task)
            <li>
                [{{ $task -> priority}}]
                {{ $task -> title }} <br>
                {{ $task -> description }}
            </li>
        @endforeach
    </ul>
@endsection 