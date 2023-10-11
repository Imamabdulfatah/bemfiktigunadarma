<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center"  data-aos="fade-down" data-aos-delay="100">
  <div class="container d-flex align-items-center">
    <!-- <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/" class="logo me-auto"><img src="/assets/img/LOGO BEM FIKTI.png" alt=""></a>

    <nav id="navbar" class="navbar mx-5">
      <ul>
        <li><a class="nav-link scrollto {{ Request::is('/') ? 'active':'' }} " href="/">Beranda</a></li>
        <li><a class="nav-link scrollto {{ ($active === "home") ? '' : 'd-none' }}" href="/#TentangKami">Tentang Kami</a></li>
        <li><a class="nav-link scrollto {{ Request::is('news') ? 'active':'' }}" href="/posts">Berita</a></li>
        @if ($active === "posts")
        <li><a class="nav-link scrollto" href="/categories">Kategori</a></li>
        @endif

        <li><a class="nav-link scrollto {{ ($active === "home") ? '' : 'd-none' }}" href="/fungsionaris">Fungsionaris</a></li>
        <li><a class="nav-link scrollto {{ ($active === "home") ? '' : 'd-none' }}" href="/alumni">Alumni</a></li>
        {{-- <li><a href="#">Blog</a></li> --}}
        <li><a class="nav-link scrollto {{ ($active === "home") ? '' : 'd-none' }}" href="https://api.whatsapp.com/send/?phone=62895338431299&text&type=phone_number&app_absent=0">Kontak</a></li>
      </ul>
    
        
      </div>
     
     
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <div class="text-center px-4  me-auto">
      @if ($active === "login")

      <a href="/register" class="w3-button w3-deep-purple">Daftar</a>
      @else

      @auth
     <!-- Default dropleft button -->
      <div>
        <div class="dropdown">
          <form action="/logout" method="post">
            @csrf
            <button class="w3-button" type="submit">
              Selamat Datang, {{ auth()->user()->name }} | Logout
          </form>
         
          </button>
          {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/profile">Profile</a>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div> --}}
        </div>  
      </div>
     
      @else  
      <a href="/login" class="w3-button w3-deep-purple">Login</a>
      @endauth
       
      @endif
      
    </div>
  </div>
</header>
<!-- End Header -->