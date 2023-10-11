<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class CommentsController extends Controller
{
    public function index()
    {
     return view('dashboard.comment.index',[
        'comment'=> Comment::all()]);
    }
    public function create()
    {
        return view('dashboard.comment.create',[
        ]);
    }

    public function store(Request $request, Post $post)
    {
        
        $validatedData = $request->validate([
            'name'=>'required|min:3|max:255',
            'comment'=>'required|min:3|max:50000',
            'email'=>'required|max:512',
            'artikels_id'=>'required',
        ]);

      
        $validatedData['user_id']= auth()->user()->id;
    

        Comment::create($validatedData);
        return back()->with('success', 'Terimakasih sudah memberi komentar');
    }



    public function dashboard()
    {
        // dd(request('search'));
        $comments = Comment::latest();
        if(request('search')){
            $comments->where('name', 'LIKE', '%' . request('search'). '%')
                     ->orWhere('email', 'LIKE', '%' . request('search'). '%')
                     ->orWhere('comment', 'LIKE', '%' . request('search'). '%');
        }

        return view('dashboard.comment.comments',[
            // 'comment'=> Comment::all(),
            'post' => Post::all(),
            // "viewsearch" => Comment::latest()->filter(request('search'))->paginate(7)->withQueryString()
            "comment" => $comments->get(),
        ]);
    }

  
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/dashboard/comment')->with('success', 'Comment has been deleteded');
    }


}
