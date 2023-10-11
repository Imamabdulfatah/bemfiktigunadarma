@extends('layouts.mainPemira')

@section('pemira')

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="counts">
            <div class="container">
                <div class="card mx-auto border-0">
                    <h2 class="text-center pt-4">LOGIN</h2>

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
                                <form action="/login-pemira" method="post">
                                    @csrf
                                    <h6>Bem FIKTI Account :</h6>
                                    <div class="form-group">
                                        <input type="number" name="npm" id="npm" class="form-control @error('npm') is-invalid @enderror" placeholder="npm" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    </div>
                                    <div class="text-center pt-0">
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-primary col-12">Login</button>
                                    </div> 
                                </form>
                                <small class="d-block text-center mt-3">All Ready Register? <a href="/regist-pemira">Register</a></small>
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