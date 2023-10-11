@extends('layouts.dashboardPemira')

@section('container')
   

   
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>{{ $active }}</h3>
        <p class="text-subtitle text-muted">Pastikan ke integritas Data</p>
    </div>
    <section class="section">
        <div class="row mb-2 mx-auto">
            <div class="col-12 col-md-6 mx-auto">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column ">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h2 class='card-title'>Voting</h2>
                                <div class="card-right d-flex align-items-center">
                                    <p>  </p>
                                </div>
                               
                            </div>
                            <div class="card-right d-flex align-items-center mx-auto">
                                <h6 class=" text-white">Jumlah data peserta yang mengikuti voting</h6>
                            </div>
                            <div class="chart-wrapper mx-auto">
                                {{-- <canvas id="canvas1" style="height:100px !important"></canvas> --}}
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg">
                                        {{ $hitung }} Vote
                                    </button>
                                   
                                  </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-12 col-md-6">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class='card-heading p-1 pl-3'>STATUS PENDAFTARAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="pl-3">   
                                    <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i>Keterangan </span></p>
                                    <div class="legends">
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-success me-2'></div><span class='text-xs'>Open Registrasi</span>
                                        </div>
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-danger me-2'></div><span class='text-xs'>Close Registrasi</span>
                                        </div>
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-blue me-2'></div><span class='text-xs'>Pengumumman</span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="chart-wrapper mx-auto">
                                    <div class="card text-center">
                                        <div class="input-box p-4">
                                            <div class="form-group">
                                                @foreach ($openclose as $s)
                                                <form action="{{ route('status.update', $s->id) }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <span class="details" style="display: inline;">Keterangan</span>
                                                    <select class="form-control col-lg-12 col-md-12 col-sm-12"  name="status" id="status" required>
                                                        <option disabled selected value>{{ $s->status }}</option>
                                                        <option value="open" class=" {{ ($s->status === "open") ? 'd-none' : '' }}">Open Registrasi</option>
                                                        <option value="close" class="{{ ($s->status === "close") ? 'd-none' : '' }}">Close Registrasi</option>                        
                                                    </select>
                                                    <button class="badge bg-dark border-0 mt-4" onclick="return confirm('Apakah data yakin mengubah sistem registrasi ?')">Ubah Status</button>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
@endSection

           