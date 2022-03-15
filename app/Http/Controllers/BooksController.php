<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;

class BooksController extends Controller
{
    public function createBook(){
        return view('createBook');
    }

    public function storeBook(Request $request){
        // $request->validate([
        //     'bookTitle' => 'min:5|max:10',
        //     'releaseDate' => 'numeric|min:2021|max:2022'
        // ]);
        $extension = $request->file('picture')->getClientOriginalExtension();
        $fileName = $request->bookTitle.'_'.$request->author.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $fileName);

        $request->validate([
            'bookTitle' => 'min:5|max:100',
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        Book::create([
            'bookTitle' => $request->bookTitle,
            'releaseDate' => $request->releaseDate,
            'author' => $request->author,
            'genre' => $request->genre,
            'picture' => $fileName
        ]);

        return redirect('/');
    }

    public function showBook(){
        $books = Book::all();
        return view('showBooks', compact('books'));
    }

    public function showBookById($id){
        $book = Book::findOrFail($id);
        // $comments = Comment::has('BookId', '==', $id)->get();

        return view('showBookById', compact('book'));
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

    public function getBook(){
        $books = Book::all();

        return $books;
    }
}
