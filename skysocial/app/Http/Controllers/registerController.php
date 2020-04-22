<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
class registerController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }


    public function store(Request $request){
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|confirmed|unique:posts',
            'password' => 'required|confirmed|min:6',
        ]);
        $regist = new Register;
        $regist->firstname = $request-> firstname;
        $regist->lastname = $request-> lastname;
        $regist->email = $request-> email;
        $regist->password = $request-> password;
        $regist->save();
        return redirect('/');

    }
}
