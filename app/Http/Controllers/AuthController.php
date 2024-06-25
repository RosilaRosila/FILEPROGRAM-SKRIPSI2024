<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    /* ----------- CONTROLLER LOGIN -----------*/
    public function login()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }

        // Validator::make($request->all(), [
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ])->validate();

        // if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        //     throw ValidationException::withMessages([
        //         'email' => trans('auth.failed')
        //     ]);
        // }

        // $request->session()->regenerate();

        // if (auth()->user()->type == 'admin') {
        //     return redirect()->route('admin/home');
        // } else {
        //     return redirect()->route('home');
        // }

        // return redirect()->route('dashboard');
    }


    /* ----------- CONTROLLER REGISTER -----------*/
    public function register()
    {
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        // $request->validate([
        //     'nama'  => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:6'
        // ]);

        // $data['name']       = $request->nama;
        // $data['email']      = $request->email;
        // $data['password']   = Hash::make($request->password);

        // User::create($data);

        // $login = [
        //     'email'     => $request->email,
        //     'password'  => $request->password
        // ];

        // if (Auth::attempt($login)) {
        //     return redirect()->route('admin.dashboard');
        // } else {
        //     return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        // }

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');

        // if (Auth::attempt($login)) {
        //     return redirect()->route('admin.dashboard');
        // } else {
        //     return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }
}
