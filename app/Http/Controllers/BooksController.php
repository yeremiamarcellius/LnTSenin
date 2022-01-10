<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function createBook(){
        return view('createBook');
    }

    public function storeBook(Request $request){
        Book::create([
            'bookTitle' => $request->bookTitle,
            'releaseDate' => $request->releaseDate,
            'author' => $request->author,
            'genre' => $request->genre
        ]);
        
        return redirect('/');
    }

    public function showBook(){
        $books = Book::all();
        return view('showBooks', compact('books'));
    }

    public function formUpdateBook($id){
        $book = Book::findOrFail($id);
        return view('updateBook', compact('book'));
    }

    public function updateBook($id, Request $request){
        Book::findOrFail($id)->update([
            'bookTitle' => $request->bookTitle,
            'releasedDate' => $request->releasedDate,
            'author' => $request->author,
            'genre' => $request->genre
        ]);

        return redirect('/show/books');
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect('/show/books');
    }
}
