<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function store()
{
    request()->validate([
        'title' => 'required|string|max:255',
    ]);

    return [
        'title' => request('title'),
        'author' => request('author'),
        'year' => request('year'),
        'genre' => request('genre'),
    ];
}
}
