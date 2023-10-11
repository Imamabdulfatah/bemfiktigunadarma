<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        $this->authorize('admin');
        return view('dashboard.categories.create', [
            'title' => "Membuat Category Baru"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:posts',
       ]);

       Category::create($validatedData);

       return redirect('/dashboard/categories')->with('success', 'New post has been added');
    }

    public function edit(category $category)
    {
        $this->authorize('admin');
        return view('dashboard.categories.edit' ,[
            'category' => $category,
            // 'categories' => Category::all()
        ]);
    }

    public function update(Request $request,Category $category)
    {
        $rules = [
            'name' => 'required|min:3|max:255',
        ];

        // agar pas di update tidak error jika tidak diganti
        if($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate(($rules));

        Category::where('id', $category->id)
                ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Post has been Update');
    }


    public function destroy(category $category, Post $post)
    {
        
        Category::destroy($category->id);

        // if ($category->id === $post->category_id) {
        //     Post::destroy($post->category_id);
        // } 
        
        return redirect('/dashboard/categories')->with('success', 'post has been deleted!');
    }
}
