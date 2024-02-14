<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Str;
class PengaduanController extends Controller
{
    public function home(){
        $custom_id = Str::random(10);
        $pengaduan = Pengaduan::latest()->paginate(3);

        return view('index', compact('custom_id', 'pengaduan'));
    }

    public function store(){

    }

    public function cari(){

    }

    public function sendLogin(Request $request)
    {


        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (auth()->guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin')->with([
                'success' => 'Login Berhasil',
            ]);
        } else {
            return back()->with([
                'error' => 'Username atau password salah.',
            ]);
        }
    }

    public function login(){
        return view('auth.login');
    }
    
}

