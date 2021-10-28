<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('users');
    }
    public function show(){
       
        $users = DB::select("select * from users");
        return view('UserData' , compact('users') );
        
    }
}

