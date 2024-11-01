<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileLinksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/r/{path}', [LinkController::class, 'redirect'])->name(name: "redirect"); // To handle redirection




Route::get('/profile', function () {
    return view('dashboard');
});
Route::get('/contact', function () {
    return view(view: 'contact');
});


Route::middleware('auth')->group(function () {
    Route::get("/profile", [ProfileController::class, "index"])->name('dashboard');
    Route::get("/dashboard", [ProfileController::class, "index"])->name('dashboard');

});

require __DIR__ . '/auth.php';

Route::get("/{user_url}", [ProfileLinksController::class, "index"]);