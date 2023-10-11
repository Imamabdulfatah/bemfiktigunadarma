@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Komentar</h1>
  </div> 
  

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  
  <div class="table-responsive col-lg-8">
    <form action="/dashboard/comment">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
      <button class="btn btn-dark" type="submit"  >Search</button>
    </div>
    </form>

    @if ($comment->count())
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Comment</th>
          <th scope="col">Judul Berita</th>
          <th scope="col">Action</th>
         
        </tr>
      </thead>
      <tbody>
      @foreach ($comment as $comments)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $comments->name }}</td>
          <td>{{ $comments->email }}</td>
          <td>{{ $comments->comment }}</td>
          @foreach($post as $posts)
          @if ($comments->artikels_id === $posts->id)
              <td>{{ $posts->title }}</td>
          @endif
          @endforeach
          <td>
            {{-- <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}
            <form action="{{ route('comment.delete', $comments->id) }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are You sure ? ')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
    @else
    <p class="text-center fs-4">Data Tidak ditemukan</p>
    @endif
  </div>
@endsection