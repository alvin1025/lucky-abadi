<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:5|max:255',
            'password' => 'required|min:8|max:255',
            'email'=> 'required|email:dns|unique:users'
        ]);

        //mengencrypt password
        $validateData['password'] = Hash::make($validateData['password']);

        // memasukan data ke database
        User::create($validateData);

        // $request->session()->flash('success', 'Registration Successfully! Please Login Now!');

        return redirect('/login')->with('success', 'Registration Successfully! Please Login Now!');
    }
}
