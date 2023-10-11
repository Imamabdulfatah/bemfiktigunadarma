<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OpenCloseRegist;
use Illuminate\Support\Facades\Hash;

class PemiraDashboardController extends Controller
{
    public function index(User $user)
    {
        return view('pemira.dashboard.admin.index', [
            "title" => "Dashboard Pemira",
            "active" => "dashboard",
            "sidebar" => "sidebar",
            "hitung" => $user->count('kandidat'),
            "openclose" => OpenCloseRegist::all(),
        ]);
    }

    public function openclose($id ,Request $request, OpenCloseRegist $register)
    {
        // return $request;
        $validateData = $request->validate([
            'status' => 'required',
        ]);

        $register->updateOrCreate($validateData);
        $data = OpenCloseRegist::findOrFail($id);
        $data->delete();
        // $valorant->destroy($validateData);

        return redirect('/dashboard-admin')->with('success', 'Status Pendaftaran berhasil diupdate');
    }


    public function regist()
    {
        return view('pemira.dashboard.admin.registration.create', [
            "title" => "Dashboard Pemira",
            "active" => "dashboard",
            "sidebar" => "sidebar",
        ]);
    }

    public function show()
    {
        $user = User::latest();
        if(request('search')){
            $user->where('name', 'LIKE', '%' . request('search'). '%')
                     ->orWhere('class', 'LIKE', '%' . request('search'). '%')
                     ->orWhere('kandidat', 'LIKE', '%' . request('search'). '%');
                  
        }

        return view('pemira.dashboard.admin.data', [
            "title" => "Dashboard Pemira",
            "active" => "dashboard",
            "sidebar" => "sidebar",
            // "data" => User::all(),
            "data" => $user->get(),
        ]);
    }

    public function delete($id)
    {
       
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('danger', 'Data berhasil dihapus');
        
    }

    public function data()
    {
        $user = User::latest();
        if(request('search')){
            $user->where('name', 'LIKE', '%' . request('search'). '%')
                     ->orWhere('class', 'LIKE', '%' . request('search'). '%')
                     ->orWhere('kandidat', 'LIKE', '%' . request('search'). '%');
                  
        }

        return view('pemira.dashboard.admin.registration.view', [
            "title" => "Dashboard Pemira",
            "active" => "dashboard",
            "sidebar" => "sidebar",
            "user" => $user->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'npm' => 'required|min:6|max:15',
            'username' => 'min:3', 'max:255',
            'email' => 'required|min:3|max:512',
            'password' => 'required|min:5|max:512',
            'class' => 'required|min:2|max:255',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flush('success', 'Data Berhasil Ditambahkan');

        // pindah ke halaman login
        return redirect('/dashboard-admin/pendaftaran')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function hapus($id)
    {
       
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('danger', 'Data berhasil dihapus');
        
    }

    public function edit(User $users)
    {
        return view('pemira.dashboard.admin.registration.update', [
            "title" => "Dashboard Pemira",
            "active" => "dashboard",
            "sidebar" => "sidebar",
            "user" => $users,
        ]);
    }

    public function update($id, Request $request, User $users) 
    {
    
        $validateData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'class' => 'required',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $users->updateOrCreate($validateData);
        $data = User::findOrFail($id);
        $data->delete();

        return redirect('/dashboard-admin/vote-pendaftaran')->with('success', 'Data berhasil diupdate');
    }

    public function output()
    {
        return view('pemira.dashboard.admin.hasil', [
            "title" => "Dashboard Pemira",
            "active" => "dashboard hasil",
            "sidebar" => "sidebar",
            "kandidat" => User::get('kandidat'),
            "semua" => User::all(),
        ]);
    }
}
