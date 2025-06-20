<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'kode_reseller' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('kode_reseller', $credentials['kode_reseller'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'kode_reseller' => 'Kode Reseller atau Password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login-form')->with('status', 'Anda telah berhasil logout.');
    }
}
