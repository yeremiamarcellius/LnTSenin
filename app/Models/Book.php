<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookTitle',
        'releaseDate',
        'author',
        'genre',
        'picture'
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'BookId');
    }

    public function suppliers(){
        return $this->belongsToMany(Supplier::class, 'supplier_books', 'supplierId', 'bookId');
    }
}
