<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return 'index';
    }

    public function create()
    {
        return 'create';
    }
    public function store()
    {
        return 'store';
    }
    public function edit(Note $note)
    {
        return 'edit';
    }

    public function update()
    {
        return 'update';
    }

    public function show(Note $note)
    {
        return 'show';
    }
    public function destroy(Note $note)
    {
        return 'destroy';
    }
}
