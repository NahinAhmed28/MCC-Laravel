<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        // return view('form');
        
    }
   public function store(Request $req)
   {
    
    //    return $req->file('file')->store('img');
    $member = new Member;
    $member->name=$req->name;
    $member->email=$req->email;
    $member->address=$req->address;
    $member->save();
    return redirect("form-show");
   }
   public function show()
    {
        $data= Member::paginate(5);
       return view ("form-show",compact('data'));
        
    }
}
