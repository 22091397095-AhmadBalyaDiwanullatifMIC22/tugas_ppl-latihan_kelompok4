<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $collect = Admin::get();
        return view('user.index', compact('collect'), ['title' => 'Laravel 11 | PPL']);
    }

    public function create()
    {
        return view('user.create', ['title' => 'Laravel 11 | PPL']);
    }

    public function store(Request $request){
        $request->validate([
            'Username' => 'required|string|max:255|unique:users',
            'Password' => 'required|string|max:8',
            'Name' => 'required|string|max:255'
        ]);

        Admin::create([
            'username' => $request->Username,
            'password' => $request->Password,
            'name' => $request->Name,
        ]);

        return redirect('/user/create')->with('status','User Created');
    }

    public function edit(int $id){
        $edit = Admin::findOrFail($id);
        return view('user.edit', compact('edit'), ['title' => 'Laravel 11 | PPL']);
    }

    public function update(Request $request, int $id){
        $request->validate([
            'Username' => 'required|string|max:255|unique:users',
            'Password' => 'required|string|max:8',
            'Name' => 'required|string|max:255'
        ]);

        Admin::findOrFail($id)->update([
            'username' => $request->Username,
            'password' => $request->Password,
            'name' => $request->Name,
        ]);

        return redirect()->back()->with('status', 'User Updated');
    }

    public function destroy(int $id){
        $destroyer = Admin::findOrFail($id);
        $destroyer->delete();

        return redirect()->back()->with('status', 'User Deleted');

    }


}
