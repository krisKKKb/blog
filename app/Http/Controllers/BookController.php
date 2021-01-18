<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = book::all();
        return view('welcome', ['books' => $books]);
    }

    public function book(Book $book)
    {
        return view('book', ['book' => $book]);
    }
}
