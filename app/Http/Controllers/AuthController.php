<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
        $user = User::where('email', $validatedData['email'])->get()->first();
        if ($user) {
            if (!Hash::check($validatedData['password'], $user->password)) {
                return redirect()->back()->withErrors(['passwords' => 'Passwords invalid']);
            }
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors(['email' => 'Aucun utilisateur avec cette email']);
        }

        dd($user);
    }
    public function getRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $user = new User(
            array_merge(
                $validatedData,
                ['password' => Hash::make($validatedData['password'])]
            )
        );
        // $user1 = new User();
        // $user1->name = $validatedData['name'];
        // $user1->email = $validatedData['email'];
        // $user1->password = Hash::make($validatedData['password']);
        // $user1->save();
        $user->save();
        Auth::login($user);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return view('welcome');
    }
}
