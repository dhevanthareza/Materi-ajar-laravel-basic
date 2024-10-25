<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/admin/post');
    }
    public function loginPage()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $data = $request->only(['email', 'password']);

        $user = User::where('email', $data['email'])->first();

        if (empty($user)) {
            return redirect('/login')->with('error', 'User tidak ditemukan');
        }

        if (!Hash::check($data['password'], $user->password)) {
            return redirect('/login')->with('error', 'Salah Password');
        }

        $user = Auth::login($user);

        return redirect('/admin/post');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
