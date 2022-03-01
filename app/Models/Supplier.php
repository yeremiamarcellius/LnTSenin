<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier'
    ];

    public function books(){
        return $this->belongsToMany(Book::class, 'supplier_books', 'supplierId', 'bookId');
    }
}
