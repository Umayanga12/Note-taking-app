<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()
            ->orderBy("created_at", "desc")
            ->where("user_id", request()->user()->id)
            ->orderBy("creted_at", "desc")
            ->paginate(5);
        return view("note.index", ["notes" => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("note.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "note" => ["required", "string"],
        ]);

        $data["user_id"] = auth()->id();
        $note = Note::create($data); // Corrected `created` to `create`

        return to_route("note.show", $note)->with(
            "message",
            "Note was created successfully"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403);
        }
        return view("note.show", compact("note"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403);
        }
        return view("note.edit", compact("note"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403);
        }
        $data = $request->validate([
            "note" => ["required", "string"],
        ]);

        $note->update($data);

        return to_route("note.show", $note)->with(
            "message",
            "Note was updated successfully"
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403);
        }

        $note->delete();

        return to_route("note.index")->with(
            "message",
            "Note was deleted successfully"
        );
    }
}
