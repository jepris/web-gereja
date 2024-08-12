<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Menangani registrasi pengguna
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'wijk' => 'required|string|max:255',
            'notelp' => 'required|string|max:255',
            'umur' => 'required|integer|max:120', // disarankan menggunakan integer untuk umur
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        dd('Validation passed');
        User::create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'umur' => $request->umur,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        dd($request->all());
        // return redirect()->route('login')->with('status', 'Registration successful! Please log in.');
    }

    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani login pengguna
    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        // if (Auth::attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ])) {
        //     return redirect()->intended('/'); // Ganti dengan route tujuan setelah login
        // }
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->login)
                    ->orWhere('phone', $request->login)
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('/'); // Ganti dengan rute yang sesuai setelah login
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Menangani logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
