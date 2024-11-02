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
        return "Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store";
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return "Show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return "Edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return "Destroy";
    }
}
