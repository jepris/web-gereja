<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
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
        // return request()->all();
        $validatedData=$request->validate([
            'name' => 'required|max:255',
            'birth_date' => 'required|date',
            'alamat' => 'required|max:255',
            'wijk' => 'required|max:255',
            'notelp' => 'required',
            'umur' => 'required', // disarankan menggunakan integer untuk umur
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        // dd('Validation passed');
        $validatedData['password']=bcrypt($validatedData['password']);

        User::create($validatedData);
        // User::create([
        //     'name' => $request->name,
        //     'birth_date' => $request->birth_date,
        //     'wijk' => $request->wijk,
        //     'notelp' => $request->notelp,
        //     'umur' => $request->umur,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'role' => 'user',
        // ]);
        return redirect('/login')->with('message', 'Registration successful! Please log in.');
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
        $credential=$request->validate([
            'notelp' => 'required',
            'password' => 'required|string',
        ]);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/beranda');
        }

        return back()->with('loginerror','Login Gagal');
        // dd('berhasil');

        // $user = User::where('email', $request->login)
        //             ->orWhere('phone', $request->login)
        //             ->first();

        // if ($user && Hash::check($request->password, $user->password)) {
        //     Auth::login($user);
        //     return redirect()->intended('/'); // Ganti dengan rute yang sesuai setelah login
        // }

        // return redirect()->back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ]);
    }

    // Menangani logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/beranda');
    }
}
