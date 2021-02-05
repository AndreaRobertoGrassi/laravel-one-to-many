@extends('layouts.main-layout')
@section('content')
    <h1>Employees</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <a href="{{ route('emp-show', $employee -> id) }}">
                    {{$employee-> name}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection