<?php

namespace App;
use App\Book;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function books(){
        return $this->belongsToMany(Book::class,'category_books','category_id','book_id');
    }
}
