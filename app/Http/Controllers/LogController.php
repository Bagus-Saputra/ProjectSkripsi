<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('beranda');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('berandaadmin');
        } else {
            session()->flash('alert', 'error');
            session()->flash('message', 'Yang anda masukkan SALAH');
            return view('login');
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

}
