@extends('layouts.app')

@section('content')
    <h2 class="text-center" >MOVIES</h2>

    <a href="{{ route('movie.edit') }}">CREATE</a>

    <div class="float-left col-6">
        {{ $movies->links() }}
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">PRICE</th>
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
                <td><a href="{{ route('movie.destroy', ['id'=>$movie->id]) }}">del</a></td>
                <td><a href="{{ route('movie.edit', ['id'=>$movie->id]) }}">edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
