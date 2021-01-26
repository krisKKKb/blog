<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = book::query();

        $order = 'desc';

        if ($request->has('order')) {
            $order = $request->order;
        }
        if ($request->has('sort')) {
            $books->orderBy($request->sort, $order);
            $order = $order == 'desc' ? 'asc' : 'desc';
    }
    return view('welcome', ['books' => $books->paginate(20)->withQueryString(), 'order' => $order]);
}
    public function book(Book $book)
    {
        return view('book', ['book' => $book]);
    }
}
