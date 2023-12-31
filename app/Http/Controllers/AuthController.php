<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function storeRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255', // pipe format
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // array format
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Menggunakan bcypt
        //$validatedData['password'] = bcrypt($validatedData['password']);

        // Menggunakan Hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Versi Session Flash
        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login'); // Versi shorthand, redirect sekaligus membawa flash message
    }
}
