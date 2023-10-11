@extends('dashboard.layouts.main')

@section('container')
<div class="page-title">
<h3>{{ $title }}</h3>
  <p class="text-subtitle text-muted">Data Umum</p>
</div>
<section class="section">
  <div class="card text-center">
    <div class="card-header">
      Data Pengnjung Web
    </div>
    <div class="card-body">
      <h5 class="card-title">Seluruh pengunjung Web</h5>
      {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
      <a href="#" class="btn btn-primary">Belum Ada pengunjung</a>
    </div>
  </div>
 
</section>
@endsection