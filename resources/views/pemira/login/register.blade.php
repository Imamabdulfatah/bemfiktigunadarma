@extends('layouts.mainPemira')

@section('pemira')

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="counts">
            <div class="container">
                <div class="card mx-auto border-0">
                    <h2 class="text-center pt-4">Registrasi PEMIRA</h2>

                    {{-- jika gagal --}}
                    <div class="px-4">
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Login Gagal
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    </div>

                    <div class="card-header border-bottom-0 bg-transparent">
                        <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill"
                                    href="#pills-login" role="tab" aria-controls="pills-login"
                                    aria-selected="true">Voting</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body pb-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                aria-labelledby="pills-login-tab">

                                @foreach ($openclose as $opencloses)
                                @if ($opencloses->status === 'open')
                                <form action="/regist-pemira" method="post" enctype="multipart/form-data">
                                    @csrf
                              
                                    <div class="form-group mb-3">
                                        <label for="floatingInput">Nama Lengkap</label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror " placeholder="Justin Bieber" required value="{{ old('name') }}" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floatingInput">NPM</label>
                                        <input type="number" name="npm" id="npm" class="form-control @error('npm') is-invalid @enderror " placeholder="20121592" required value="{{ old('npm') }}">
                                        @error('npm')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floatingInput">Username</label>
                                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Justin_88" required value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floatingInput">Email</label>
                                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="justin@gmail.com" required value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floatingInput">Kelas</label>
                                        <input type="text" name="class" id="class" class="form-control @error('class') is-invalid @enderror" placeholder="2kb03" required value="{{ old('class') }}">   
                                        @error('class')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floatingInput">Password</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required> 
                                    </div>
                                    <div class="my-4">
                                        <label for="image" class="form-label">KRS Terbaru (max: 1MB | format: pdf, jpg, png)</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                      </div>
                                    <div class="text-center pt-0">
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-primary col-12">Login</button>
                                    </div> 
                                 
                                </form>
                                @else
                                
                                <h3>Mohon maaf voting telah ditutup!</h3>
                                <h3>Terimakasih bagi seluruh mahasiswa FIKTI yang telah berpartisipasi untuk melakukan e-vote.</h3>
                                <h3>Sampai jumpa tahun depan!</h3> 
                                @endif
                              @endforeach
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection