@extends('layouts.app')

@section('content')
    <h2 class="text-center"> @lang('movie') </h2>
    <h3 class="text-center">@if($movie ?? '') {{ $movie->title }} @endif </h3>

        <form action="{{ route('movie.store', ['id' => ($movie ?? '') ? $movie->id : null] ) }}" method="post">
            @csrf
{{--            @method('PUT') für vuejs oder reactjs --}}
            <div class="form-group">
                <label for="exampleInputTitlel1">@lang('title')</label>
                <input name="title" value="Art @if($movie ?? '') {{ $movie->title }} @endif" type="text" class="form-control"
                       id="exampleInputtitlel1" placeholder="@lang('title')">
            </div>
            <div class="form-group">
                <label for="exampleInputprice1">@lang('price')</label>
                <input name="price" value="@if($movie ?? '') {{ $movie->price }} @endif" type="text" class="form-control"
                       id="exampleInputPassword1" placeholder="@lang('price')">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">@lang('description')</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                          rows="3">@if($movie ?? '') {{ $movie->description }} @endif sssss</textarea>
            </div>
            <button type="submit" class="btn btn-primary">@lang('update')</button>
        </form>

@endsection
