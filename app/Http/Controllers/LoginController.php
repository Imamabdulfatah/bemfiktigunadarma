<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OpenCloseRegist;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
      

        if(Auth::attempt($credentials) && $request->email !== "bemfikti@gmail.com" && $request->email !== "pemira23@gmail.com"  ) {
            if($request->email === "creator1@gmail.com" || $request->email === "creator2@gmail.com" || $request->email === "creator3@gmail.com"){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            $request->session()->regenerate();
            return redirect()->intended('/');
        } elseif(Auth::attempt($credentials) && $request->email === "bemfikti@gmail.com") {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } elseif(Auth::attempt($credentials) && $request->email === "pemira23@gmail.com") {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-admin');
        } else {
            return back()->with('loginError', 'Login failed');
        }
       

        return back()->with('loginError', 'Login failed!');

        // dd('berhasil login')
    }

    public function show()
    {
        return view('pemira.login.login', [
            'title' => 'Register',
            'active' => 'login',
            "openclose" => OpenCloseRegist::all(),
        ]);
    }

    public function authuser(Request $request)
    {
        $credentials = $request->validate([
            'npm' => 'required',
            'password' => 'required'
        ]);
      

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/vote');
        } 
       

        return back()->with('loginError', 'Login failed!');

        // dd('berhasil login')
    }

   

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function logoutPemira()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/pemira');
    }
}
