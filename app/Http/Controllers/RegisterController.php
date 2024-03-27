<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('register.index', [
        'title' => 'Laravel 11 | Register',
        'active' => 'register'
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $register = $request -> validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|min:5|max:255'
        ]);

        $register['password'] = Hash::make($register['password']);
        $register['confirm_password'] = Hash::make($register['confirm_password']);

        User::create($register);
        // $request->session()->flash('success', 'Registration Successfull! Please login');
        return redirect('/login')->with('success', 'Registration Successfull! Please login');
    }


}
