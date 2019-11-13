@extends('layouts.app')

@section('content')
    <h2 class="text-center">@lang('movie')</h2>

    <div class="float-right col-6">
        <a class="btn btn-primary" href="{{ route('movie.edit') }}" role="button">@lang('create')</a>
    </div>
    <div class="float-left col-6">
        {{ $movies->links() }}
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">@lang('title')</th>
            <th scope="col">@lang('price')</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <th scope="row">{{ $movie->id }}</th>
                <td><a href="{{ route('movie.show', ['id'=>$movie->id]) }}">{{ $movie->title }}</a></td>
                <td>{{ $movie->price }}</td>
                <td><a href="{{ route('movie.destroy', ['id'=>$movie->id]) }}">@lang('delete')</a></td>
                <td><a href="{{ route('movie.edit', ['id'=>$movie->id]) }}">@lang('edit')</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
