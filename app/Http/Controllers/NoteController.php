<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller //###2
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function edit($id)
    {
        $note = Note::where('id', $id)->first();
        return view('notes.edit', compact('note'));
    }

    public function store(Request $request, $id = null)
    {
        if ($id > 0) {
            Note::whereId($id)->update(
                [
                    'title' => $request->noteTitle,
                    'description' => $request->noteDescription,
                ]);
        } else {
            Note::create([
                'title' => $request->noteTitle,
                'description' => $request->noteDescription,
            ]);
        }

        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        Note::destroy($id);
        return redirect()->route('notes.index');
    }
}
