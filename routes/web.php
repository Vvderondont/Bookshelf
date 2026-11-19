<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*Route::get('/', function () {
    return redirect()->route('books.index');
}); */

Route::get('/books', function () {
    return view('books.index');
})->name('books.index');

Route::get('/books/create', function(){
    return view('books.create');
})->name('books.create');

Route::post('/books', [BookController::class, 'store']);


