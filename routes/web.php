<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [welcomeController::class, "welcome"])->name("welcome");
// Route::get("/note", [NoteController::class], "index")->name("note.index");
// Route::get("/note/create", [NoteController::class], "create")->name(
//     "note.create"
// );
// Route::post("/note/store", [NoteController::class], "store")->name(
//     "note.store"
// );
// Route::get("/note/show{id}", [NoteController::class], "show")->name(
//     "note.show"
// );
// Route::get("/note/edit/{id}", [NoteController::class], "edit")->name(
//     "note.edit"
// );
// Route::put("/note/update/{id}", [NoteController::class], "update")->name(
//     "note.update"
// );
// Route::delete("/note/destroy/{id}", [NoteController::class], "destroy")->name(
//     "note.destroy"
// );

Route::resource("note", NoteController::class);
