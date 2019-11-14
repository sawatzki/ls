@extends('layouts.app') {{-- ###7--}}

@section('content')
    <form method="post" action="{{ route('notes.store', ['id' => $note->id]) }}" >
        @csrf
        <input type="text" name="noteTitle" value="{{ $note->title }}" placeholder="Title"><br>
        <textarea name="noteDescription" cols="20" rows="3" placeholder="Description">{{ $note->description }}</textarea><br>
        <input type="submit" value="Store">
    </form>
@endsection
