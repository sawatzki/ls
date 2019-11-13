@extends('layouts.app')

@section('content')
    <h2 class="text-center"> MOVIE </h2>
{{--    <h3 class="text-center"> @if($movie) {{ $movie->title }} @endif </h3>--}}

        <form action="{{ route('movie.store', ['id' => ($movie ?? '') ? $movie->id : null] ) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputTitlel1">Title</label>
                <input name="title" value="Art @if($movie ?? '') {{ $movie->title }} @endif" type="text" class="form-control"
                       id="exampleInputtitlel1" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="exampleInputprice1">Price</label>
                <input name="price" value="333 @if($movie ?? '') {{ $movie->price }} @endif" type="text" class="form-control"
                       id="exampleInputPassword1" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                          rows="3">@if($movie ?? '') {{ $movie->description }} @endif sssss</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection
