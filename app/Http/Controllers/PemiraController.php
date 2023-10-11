<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PemiraController extends Controller
{
    public function vote()
    {
        
        return view('pemira.vote', [
            "title" => "Vote Pemira",
            "active" => "vote",
            // 'vote' => Voters::all(),
        ]);
    }

    public function storeVote(Request $request, User $user)
    {
        // return $request;
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'npm' => 'required|min:6|max:15',
            'username' => 'min:3', 'max:255',
            'email' => 'required|min:3|max:512',
            'password' => 'required|min:5|max:512',
            'class' => 'required|min:2|max:255',
            'kandidat' => 'required',
            'is_admin' => 'required',
        ]);


        $user->updateOrCreate($validateData);
        $data = User::findOrFail(auth()->user()->id);
        $data->delete();

        // pindah ke halaman login
        return redirect('/pemira')->with('success', 'Voting anda berhasil, Terimakasih atas partisipasi');
    }

}
