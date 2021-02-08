@extends('layouts.main-layout')
@section('content')
<h1>
    [{{ $typ -> id }}]
    EDIT TYPOLOGY
</h1>
<form action="{{ route('typologies.update', $typ -> id) }}" method="post">
    @csrf
    @method('put') {{-- update supporta put --}}
    <label for="name">Name</label>
    <input name="name" type="text" value="{{ $typ -> name }}">
    <br>
    <label for="description">Description</label>
    <input name="description" type="text" value="{{ $typ -> description }}">
    <br><br>
    <label for="tasks[]">Tasks</label> <br>
    @foreach ($tasks as $task)
    <input name="tasks[]" type="checkbox" value="{{ $task -> id }}" @if ($typ ->
    tasks -> contains($task -> id))
    checked
    @endif
    >
    {{ $task -> title }}
    <br>
    @endforeach
    <br><br>
    <input type="submit" value="salva">
</form>
@endsection