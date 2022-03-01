<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Book;

class CommentsController extends Controller
{
    //
    public function createComment(){
        $books = Book::all();
        return view('createComment', compact('books'));
    }

    public function storeComment(Request $request){
        Comment::create([
            'BookId' => $request->book,
            'Comment' => $request->comment
        ]);

        return redirect('/show/books');
    }

    public function showComment(){
        $comments = Comment::all();

        return view('showComment', compact(('comments')));
    }
}
