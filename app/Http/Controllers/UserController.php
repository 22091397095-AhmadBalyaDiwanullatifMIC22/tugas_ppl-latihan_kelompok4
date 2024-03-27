<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function indexUser()
    {
        $collect = User::get();
        return view('user.indexUser', compact('collect'));
    }

    public function create(){
        return view('user.createUser');
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);

        // Simpan data user baru
        User::create([
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name,
        ]);

        return response()->setJSON(['message' => 'User registered successfully']);
    }

    public function edit(int $id){
        $edit = User::findOrFail($id);
        return view('user.updateUser', compact('editor'));
    }

    public function update(Request $request)
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        if ($user instanceof User) {
            // Validasi data yang masuk
            $request->validate([
                'name' => 'required'
            ]);

            // Update data user
            $user->name = $request->name;
            $user->save();

            return response()->setJSON(['message' => 'User updated successfully']);
        } else {
            return response()->setJSON(['message' => 'User not found'], 404);
        }

    }

    public function show()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        return response()->setJSON($user);
    }

    public function logout()
    {
        // Logout user
        Auth::logout();

    }

    public function destroy(int $id)
    {
        $destroyer = user::findOrFail($id);
        $destroyer->delete();

        return redirect()->back()->with('status','User deleted');
    }
}
