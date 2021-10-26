<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class StartController extends Controller
{
    public function index(){
        $users=User::get();
        return view('index',['users'=>$users]);
    }
}
