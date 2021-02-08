@extends('layouts.main-layout')
@section('content')
<h1>NEW TYPOLOGY</h1>
<form action="{{ route('typologies.store') }}" method="POST">
    @csrf
    @method('POST')
    <label for="name">Name</label>
    <input name="name" type="text">
    <br>
    <label for="description">Description</label>
    <input name="description" type="text">
    <br><br>
    <label for="tasks[]">Tasks</label> <br>
    @foreach ($tasks as $task)
    <input name="tasks[]" type="checkbox" value="{{ $task -> id }}"> {{ $task -> title }} <br>
    @endforeach
    <br><br>
    <input type="submit" value="salva">
</form>
@endsection