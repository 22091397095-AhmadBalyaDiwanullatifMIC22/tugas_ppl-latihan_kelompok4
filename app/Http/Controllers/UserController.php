<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);

        // Simpan data user baru
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->save();

        return response()->setJSON(['message' => 'User registered successfully']);
    }

    public function login(Request $request)
    {
        // Validasi data yang masuk
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->setJSON(['message' => 'Login successful']);
        } else {
            return response()->setJSON(['message' => 'Invalid credentials'], 401);
        }
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

        return response()->setJSON(['message' => 'Logged out successfully']);
    }
}
