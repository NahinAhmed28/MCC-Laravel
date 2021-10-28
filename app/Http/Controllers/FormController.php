<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\formdata;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
        
    }
   public function store(Request $req)
   {
    
       return $req->file('file')->store('img');
   }


}
