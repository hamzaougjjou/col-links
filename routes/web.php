<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileLinksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/r/{path}', [LinkController::class, 'redirect'])->name(name: "redirect"); // To handle redirection





Route::get('/contact', action: [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', action: [ContactController::class, 'submit'])->name('contact.submit');


Route::middleware('auth')->group(function () {
    Route::get("/profile", [ProfileController::class, "index"])->name('dashboard');
    Route::get("/profile", [ProfileController::class, "index"])->name('profile');
    Route::put("/profile", [ProfileController::class, "update"])->name('profile.update');
    Route::delete("/profile", [ProfileController::class, "destroy"])->name('profile.destroy');
    Route::get("/dashboard", [ProfileController::class, "index"])->name('dashboard');
    Route::post('/links', [LinkController::class, 'store'])->name(name: "links.store"); // To handle add new link
    Route::delete('/links/{id}', [LinkController::class, 'destroy'])->name('links.destroy');


});

require __DIR__ . '/auth.php';

Route::get("/{user_url}", [ProfileLinksController::class, "index"]);