@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Content Manajemen</h1>
  </div> 

 
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Content</a>
    <form action="/dashboard/posts">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit"  >Search</button>
      </div>
      </form>
    @if ($posts->count())
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Waktu Upload</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($posts as $post)
        @if (auth()->user()->id === $post->user_id )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>{{ $post->created_at }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>

            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

            {{-- delete --}}
            <form action="/dashboard/posts/{{ $post->slug }}/delete" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are You sure ? ')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endif
      @endforeach
    </tbody>
    </table>
    @else
    <p class="text-center fs-4">Data Tidak ditemukan</p>
    @endif
   
  </div>
@endsection