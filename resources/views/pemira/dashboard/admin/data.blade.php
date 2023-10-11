@extends('layouts.dashboardPemira')

@section('container')  
<div class="main-content container-fluid">
    <div class="page-title">
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

    <div id="table1" class="card">
      <div class="col-12 col-md-6 ">
        <form action="/dashboard-admin/vote">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-dark" type="submit"  >Search</button>
          </div>
          </form>
      </div>
      
        <div class="card-header d-flex justify-content-between align-items-center">
         
            <h4 class="card-title">Daftar Nama Voting</h4>
            <div class="d-flex ">
                <i data-feather="download"></i>
            </div>
        </div>
        {{-- @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif --}}
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
                @if ($data->count())
                <table class='table mb-0' id="table1">
                  <thead>
                      <tr>
                          <th>No Pendaftaran</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>NPM</th>
                          <th>Kelas</th>
                          <th>Paslon</th>
                          <th>Waktu</th>
                          <th>Hapus Data</th>
                          <th>   </th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $datas)
                    <tr>
                            @if ($datas->kandidat !== null)
                            <td>{{ $datas->id }}</td>
                            <td>{{ $datas->name }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>{{ $datas->npm }}</td>
                            <td>{{ $datas->class }}</td>
                            <td>{{ $datas->kandidat }}</td>
                            <td>{{ $datas->created_at }}</td>
                            <td>
                                <form action="{{ route('vote.failed', $datas->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah data yakin untuk dihapus?')"><span data-feather="x-circle"></span></i></button>
                                </form>
                            </td>
                            @endif
                    </tr>
                    @endforeach
                  
                  </tbody>
                </table>
                @else
                <p class="text-center fs-4">Data Tidak ditemukan</p>
                @endif
            </div>
        </div>
    </div>
@endSection