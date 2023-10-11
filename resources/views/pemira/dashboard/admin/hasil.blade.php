@extends('layouts.dashboardPemira')

@section('container')
     
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>{{ $active }}</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2 mx-auto">
            <div class="col-12 col-md-6 mx-auto">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column ">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h2 class='card-title'>Paslon 1</h2>
                                <div class="card-right d-flex align-items-center">
                                    <p> [1] </p>
                                </div>
                               
                            </div>
                            <div class="card-right d-flex align-items-center mx-auto">
                                <h6 class=" text-white">Jumlah data yang memilih Paslon 1</h6>
                            </div>
                            <div class="chart-wrapper mx-auto">
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg">
                                         @php
                                            $jumlahLoop = 0;
                                            $angkaTerakhir = null;
                                        @endphp
                                        @foreach ($semua as $semuanya)
                                            @if ($semuanya->kandidat === '1')
                                               <div class="d-none"> {{ $jumlahLoop += 1; }}</div>
                                            @endif
                                        @endforeach
                                        {{ $jumlahLoop}}
                                    </button>
                                  </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Paslon 2</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p> [2]  </p>
                                </div>
                            </div>
                            <div class="card-right d-flex align-items-center mx-auto">
                                <h6 class=" text-white">Jumlah data yang memilih Paslon 2</h6>
                            </div>
                            <div class="chart-wrapper mx-auto">
                                
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg">
                                        @php
                                            $jumlahLoop = 0;
                                            $angkaTerakhir = null;
                                        @endphp
                                        @foreach ($semua as $semuanya)
                                            @if ($semuanya->kandidat === '2')
                                            <div class="d-none"> {{ $jumlahLoop += 1; }}</div>
                                            @endif
                                        @endforeach
                                        {{ $jumlahLoop}}
                                        
                                      
                                    </button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endSection

           