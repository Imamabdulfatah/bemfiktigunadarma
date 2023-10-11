<?php

namespace App\Http\Controllers;

use App\Models\StudentSite;
use App\Models\OpenCloseRegist;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function option()
    {
        return view('register.option', [
            'title' => 'Option Login',
            'active' => 'register'
        ]);
    }

    public function studentsite()
    {
        return view('register.loginStudent', [
            'title' => 'Studentsite Login',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        // return $request->file('image')->store('post-images');
        $validateData = $request->validate([
            'name' => 'required|max:255',
            // 'npm' => 'required|min:6|max:255|unique:users',
            // 'class' => 'required|min:4|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|unique:users|email:dns', 
            // 'image' => 'required|image|file|max:1024',
            'password' => 'required|min:5|max:255',
            
        ]);

      

        
        // if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        
        
        $validateData['password'] = Hash::make($validateData['password']);

        // if ($request->file('image') ) {
        //     $images = $request->file('image');
        //     $path = $images->store('post-images'); 
        //     $location = "";
        //     $location_real = $location.$path;
        //     $validatedData['image'] = $location_real;
        // }

        User::create($validateData);
      

        // pindah ke halaman login
        return redirect('/login')->with('success', 'Registration successfull! Please Login');

    }

    public function post(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        StudentSite::create($validateData);
      
        // pindah ke halaman login
        return redirect('/vote');

    }

    
    public function registPemira()
    {
        return view('pemira.login.register', [
            'title' => 'Register',
            'active' => 'login',
            "openclose" => OpenCloseRegist::all(),
        ]);
    }

    public function userPemira(Request $request, User $user)
    {
        // dd($request);
        // return $request->file('image')->store('post-images');
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'npm' => 'required|min:6|max:255|unique:users',
            'class' => 'required|min:4|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|unique:users|email:dns', 
            'image' => 'required|mimes:jpeg,png,pdf|max:1024',
            'password' => 'required|min:5|max:255',
            
        ]);

        //  if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        if ($request->img) {
            $file = $request->File('img');
            $ext  = $user->username . "." . $file->clientExtension();
            $file->storeAs('images/', $ext);
            $user->image_name = $ext;
        }

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
      

        // pindah ke halaman login
        return redirect('/login-pemira')->with('success', 'Registration successfull! Please Login');

    }
}
