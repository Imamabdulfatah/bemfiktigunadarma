@extends('layouts.main')

@section('main')

<br><br> <br>
<div class="row justify-content-center my-5">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <p class="text-center">Daftarkan diri anda diwebsite BEM FIKTI mendapat sumber informasi</p>
            <form action="/register" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="floatingInput">Nama </label>
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              {{-- <div class="form-floating">
                <input type="text" name="npm" class="form-control rounded-top @error('npm') is-invalid @enderror" id="name" placeholder="npm" required value="{{ old('npm') }}">
                <label for="floatingInput">NPM</label>
                @error('npm')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="class" class="form-control rounded-top @error('class') is-invalid @enderror" id="class" placeholder="class" required value="{{ old('class') }}">
                <label for="floatingInput">Kelas</label>
                @error('class')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div> --}}
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="floatingInput">username</label>
                @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">All Ready Register? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
  
@endsection