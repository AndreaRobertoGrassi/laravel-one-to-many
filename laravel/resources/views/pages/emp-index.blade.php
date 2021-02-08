@extends('layouts.main-layout')
@section('content')
    <h1>Employees</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <a href="{{ route('employees.show', $employee -> id) }}">
                    {{$employee-> name}}
                </a>
            </li>
        @endforeach
    </ul>
    <h1>Vai a <a href="{{route('home')}}">HOME</a></h1>
@endsection