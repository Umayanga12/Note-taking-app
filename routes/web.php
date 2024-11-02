<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [welcomeController::class, "welcome"])->name("welcome");

//routings for note
// Route::get("/note", [NoteController::class], "index")->name("note.index");
// Route::get("/note/create", [NoteController::class], "create")->name(
//     "note.create"
// );
// Route::post("/note", [NoteController::class], "store")->name("note.store");
// Route::get("/note/{id}", [NoteController::class], "show")->name("note.show");
// Route::get("/note/{id}/edit", [NoteController::class], "edit")->name(
//     "note.edit"
// );
// Route::put("/note/{id}", [NoteController::class], "update")->name(
//     "note.update"
// );
// Route::delete("/note/{id}", [NoteController::class], "destroy")->name(
//     "note.destroy"
// );
Route::resource("note", NoteController::class);
