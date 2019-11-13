@extends('layouts.app')

@section('content')
    <h2 class="text-center" > MOVIE </h2>
    <h3 class="text-center" > {{ $movie->title }} </h3>


    <form action="{{ route('movie.store', ['id' => ($movie) ? $movie->id : null] ) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputTitlel1">Title</label>
            <input name="title" value="{{ $movie->title }}" type="text" class="form-control" id="exampleInputtitlel1" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputprice1">Price</label>
            <input name="price" value="{{ $movie->price }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $movie->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
