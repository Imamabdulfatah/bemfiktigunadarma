@extends('layouts.dashboardPemira')

@section('container') 
<div class="page-title mb-4">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 class="mx-4">{{ $title }}</h3> 
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
    <div class="my-4 mx-4 col-lg-3 col-md-6 col-sm-12">
      <a href="/dashboard-admin/vote-pendaftaran" class="btn btn-primary">Data Mahasiswa Votin Yang Sudah di Daftarkan</a>
    </div>
    <div>
      <form method="post" action="/dashboard-admin/vote-pendaftaran/update/{{ $user->id }}"  enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="modal-content">
          <div class="modal-body">
            <div class="my-2">
              @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
            </div>
         
    
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="name" class="col-form-label ">Nama:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name)}}">
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="password" class="col-form-label">Npm:</label>
              <input type="text" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" required >
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="class" class="col-form-label">Kelas:</label>
              <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class" required value="{{ old('class', $user->class)}}">
              @error('class')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
    </form>
  </div>
</div>

@endsection