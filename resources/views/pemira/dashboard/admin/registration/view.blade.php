@extends('layouts.dashboardPemira')

@section('container')  
<div class="main-content container-fluid">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>  
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="my-5">
      <h3>Data Mahasiswa Yang Terdaftar Voting</h3>
      <p class="text-subtitle text-muted">Pastikan data sesuai dengan data yang ada</p>
      <a href="/dashboard-admin/pendaftaran" class="btn btn-primary">Tambah data</a>  
      <div class="col-12 col-md-6 my-3">
        <form action="/dashboard-admin/vote-pendaftaran">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn btn-dark" type="submit"  >Search</button>
            </div>
            </form>
      </div>
     
    </section>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <div class="table-responsive">
            @if ($user->count())
            <table class="table table-hover table-light">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>KRS</th>
                    <th scope="col" class="mr-4">action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($user as $users)
                @if ($users->npm === null)
                    
                @else
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->username }}</td>
                    <td>{{ $users->npm }}</td>
                    <td>{{ $users->class }}</td> 
                    <td>
                        @if ($users->id === 1 || $users->id === 2 || $users->id === 3 || $users->id === 4 || $users->id === 5)
                            
                        @else
                        <a href="{{ $users->image }}" download>Unduh </a>
                        @endif
                        
                    </td>        
                    <td class="flex">
                        @if ($users->id === 1 || $users->id === 2 || $users->id === 3 || $users->id === 4 || $users->id === 5)
                            Akun Admin 
                        @else
                               {{-- <a href="{{ route('dataset.edit', $users->id) }}" class="badge bg-warning my-1"><span data-feather="edit"></span></a> --}}
                        <form action="{{ route('dataset.delete', $users->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah data yakin untuk dihapus?')"><span data-feather="x-circle"></span></i></button>
                        </form>
                        @endif
                     
                    </td>
                </tr>
                @endif
               
                @endforeach
                
                </tbody>
            </table>
            @endif
            </div>
   
   
@endSection