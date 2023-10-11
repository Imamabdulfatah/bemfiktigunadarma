@extends('layouts.main')

@section('main')
<div class="container">
    <div class="container">
        <div class="row align-items-start style-purple text-dark bg-white">
          <p class="text-dark bg-white" style="margin-top: 120px;"><h1 class="text-center" style="color: #54337E;"><b>Pusat Informasi BEM FIKTI Universitas Gunadarma </b></h1></p>
        </div>
      </div>
       <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit" >Search</button>
                      </div>
                </form>
            </div>
       </div> 
    
    
       @if ($posts->count())
       <div class="card mb-3 mx-4">
           @if ($posts[0]->image)
               <div style="max-height: 350; everflow:hidden;">
                   <img src="{{ asset('storage/' .$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="card-img-top">
               </div>
           @else
               <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
           @endif
           
           <div class="card-body text-center">
           <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
           <p>
               <small class="text-muted">
                   By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> 
                   Category <a  href="/posts?category={{ $posts[0]->category->slug }}"  class="text-decoration-none">{{ $posts[0]->category->name }}</a> 
               </small>
           </p>
           <p class="card-text">{{ $posts[0]->excerpt }}</p>
           <a href="/posts/{{ $posts[0]->slug }}" class="w3-button w3-deep-purple">Selengkapnya</a>
    
           <p class="card-text">
               <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
           </p>
           </div>
       </div>
    
        <div class="row equal mx-2">
        @foreach ( $posts->skip(1) as $post  )
        <div class="col-sm-4 d-flex pb-3 ">
            <div class="col">
            <div class="card h-100">
    
                @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else
                <img src="https://source.unsplash.com/200x200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
                <div class="card-body">
                <h3 class="card-title">
                    <a href="/news/{{$post->slug }}"><b>{{ $post->title }}</b></a> </h3>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                <a href="/authors/{{ $post->author->username }}"><h5>By: {{ $post->author->name }}</h5></a>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{$post->slug }}" class="w3-button w3-deep-purple">Selengkapnya</a>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    
        </div>
        </div>
        @else
            <p class="text-center fs-4">Informasi Tidak ditemukan</p>
    
        @endif 
    
</div>

@endsection