<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('title')->paginate(20);
        return view('public.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('movie.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request, $id = null)
    {
        $validated = $request->validated();
        if ($id > 0) {
            Movie::whereId($id)->update($validated);
        } else {
            Movie::create($validated);
        }
        return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();
        return view('public.movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
//        die("success");
//        $movie = Movie::where('id', $id)->first();
//        return view('public.movie.edit', compact('movie'));
        $data = ($id > 0) ? Movie::whereId($id)->first() : null;
//        $authors = Author::orderBy('lastname')->get();
        return view('public.movie.edit', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::destroy($id);
        return redirect()->route('movie.index');
    }
}
