<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('dashboard.categories.create', [
            'title' => "Membuat Category Baru"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:posts',
       ]);

       Category::create($validatedData);

       return redirect('/dashboard/categories')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $this->authorize('admin');
        return view('dashboard.categories.edit' ,[
            'category' => $category,
            // 'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        // agar pas di update tidak error jika tidak diganti
        if($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate(($rules));

        Post::where('id', $category->id)
                ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Post has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category, Post $post)
    {
        
        Category::destroy($category->id);

        // if ($category->id === $post->category_id) {
        //     Post::destroy($post->category_id);
        // } 
        
        return redirect('/dashboard/posts')->with('success', 'post has been deleted!');
    }

    
    // terhungung ke create javascript
    public function checkSlug(Request $request)
    {
        /// https://github.com/cviebrock/eloquent-sluggable  -> slugService
        // terhubung ke create.blade.php
        $slug  = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);

     
    }
}
