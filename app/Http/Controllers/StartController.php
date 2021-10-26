<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Author;
use App\Book;
use App\Category;

class StartController extends Controller
{
    public function index(){
        $users=Author::with('books')->get();

        return view('index',['users'=>$users]);
        
    }
    public function books(){
        $books=Book::with('author')->get();
        return view('books',['books'=>$books]);
    }
    public function categories(){
        $category=Category::with('books')->get();
    dd($category);
    }
}
