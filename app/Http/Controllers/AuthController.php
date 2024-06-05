<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('welcome');
            }
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function signout(Request $request)
    {
        try {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('welcome');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function signup(Request $request)
{
    try {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthdate' => 'required|date',
            'phone_number' => 'required|string|max:255',
        ]);

        if ($request->password !== $request->password_confirmation) {
            return back()->withErrors([
                'error' => 'Password and re-password must be the same',
            ]);
        }

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'surname' => $request->surname,
            'birthdate' => $request->birthdate,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('signin')->with('success', 'Account created successfully!');
    } catch (\Exception $e) {
        return back()->withErrors([
            'error' => $e->getMessage(),
        ]);
    }
}

}
