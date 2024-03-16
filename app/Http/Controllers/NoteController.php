<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::query()->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate();
        return view('note.index', compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }
    public function store(NoteRequest $request)
    {
        $valid = $request->validated();
        $valid['user_id'] = auth()->user()->id;
        Note::create($valid);
        return to_route('note.index')->with('success', 'New note saved successfully!');
    }
    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }
    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }

    public function update()
    {
        return 'update';
    }


    public function destroy(Note $note)
    {
        return 'destroy';
    }
}
