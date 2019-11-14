@extends('layouts.app') {{-- ###3--}}

@section('content')
    <form action="{{ route('notes.store') }}" method="post">
        @csrf
        <input type="text" name="noteTitle" placeholder="title"><br>
        <textarea name="noteDescription" cols="20" rows="3" placeholder="description"></textarea><br>
        <input type="submit" value="store">
    </form>
    <hr>
    @foreach($notes as $note)
        <a href="{{ route('notes.edit', $note->id) }}">{{ $note->title }}</a>
        <a href="{{ route('notes.destroy', ['id' => $note->id]) }}">del</a><br>
        <hr>
    @endforeach
@endsection
