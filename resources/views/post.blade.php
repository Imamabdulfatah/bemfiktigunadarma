{{-- @dd($post); --}}
@extends('layouts.main')

@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
    </section>
<!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
          <!-- <div class="col-lg-8 entries"> -->
            <article class="entry entry-single">
              <h2 class="entry-title">
                {{ $post->title }}
              </h2>
              <div class="entry-img">
                @if ($post->image)
                <div style="max-height: 150; everflow:hidden;">
                    <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name}}" class="img-fluid mt-3">
                @endif
                <!-- <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid"> -->
              </div>
              
              <div class="entry-meta">

                <p> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
                {{-- <ul class="mr-4"> --}}
                  <li class="d-flex align-items-center mb-4"><a href="/authors/{{ $post->author->username }}"><i class="bi bi-person"></i>Dibuat Oleh  {{ $post->author->name }}</a></li>
                {{-- </ul> --}}
                <p>{{ $post->created_at->diffForHumans() }}</p>
              </div>

              <div class="entry-content">
                {!! $post->body !!}
              </div>

              <h3 class="text-center mb-1">Masukkan Komentarmu</h3>
        <div class="comment card my-4 pb-4">
            <div class="card-body">
                <form action="{{ route('comment', $post->slug) }}" method="post">
                    @csrf
                    @auth
                    <div class="form-gorup mb-3">
                        {{-- <label for="floatingTextarea2">Komentar</label> --}}
                        <input type="hidden" id="custId" name="name" value="{{ auth()->user()->name }}">
                        <input type="hidden" id="custId" name="email" value="{{ auth()->user()->email }}">
                        <input type="hidden" id="custId" name="artikels_id" value="{{ $option }}">
                        @error('comment')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="comment" value="{{ old('comment') }}"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @else
                    <div class="form-gorup mb-3">
                      {{-- <form class="multi-range-field my-5 pb-5">
                        <input id="multi1" class="multi-range" type="range" />
                      </form> --}}
                        <label for="floatingTextarea2">Komentar</label>
                        @error('comment')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="comment" value="{{ old('comment') }}"></textarea>
                        </div>
                    </div>
                    <a href="/login" class="btn btn-primary">Submit</a>
                    @endauth

                </form>

            </div>
        </div>
        <h3 class="text-center mb-1">Komentar Lainnya</h3>
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

     
      @endif
        <div class="comments card my-4 pb-4">
             @foreach ( $comment as $comments )
              @if ($comments->artikels_id === $option)
              <div class="comments card mt-4 mx-4 text-bold">
                  <h5 class="mx-4">{{ $comments->name }}</h5>
                  <p class="mx-4">{{ $comments->comment }}</p>
                </div>
              @endif
            
              @endforeach 
        </div>
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection