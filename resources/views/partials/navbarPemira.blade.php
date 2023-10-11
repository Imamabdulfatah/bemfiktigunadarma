  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#"><span>PEMIRA</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ ($active === "vote") ? 'd-none' : '' }} active" href="/pemira">Home</a></li>
          <li><a class="nav-link scrollto {{ ($active === "vote") ? 'd-none' : '' }}" href="#about">About</a></li>
          <li><a class="nav-link scrollto {{ ($active === "vote") ? 'd-none' : '' }}" href="#rules">Rules</a></li>
          <li><a class="nav-link scrollto " href="#candidates">Candidates</a></li>
          <li><a class="nav-link scrollto {{ ($active === "vote") ? 'd-none' : '' }}" href="#faq">FAQ</a></li>
          @if ($active === "vote")
          <form action="/logout-pemira" method="post">
            @csrf
            <button class="btn btn-danger mx-3" type="submit">
              Logout
          </form>
          @else
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                @if ( auth()->user()->name === "Bem FIKTI")
                  <li><a class="dropdown-item" href="/admin"><i class="bi bi-columns-gap mx-2"></i>Dashboard Admin</a></li>
                @else
                  <li><a class="dropdown-item" href="/"><i class="bi bi-columns-gap mx-2"></i>Halaman Utama</a></li>
                  <li><a class="dropdown-item" href="/posts"><i class="bi bi-columns-gap mx-2"></i>Berita</a></li>
                @endif
              
      
                <li>
                  <form action="/logout-pemira" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left mx-2"></i>Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            @foreach ($openclose as $opencloses)
              @if ($opencloses->status === 'open')
              <li><a class="nav-link scrollto" href="/regist-pemira">Sign In</a></li>
              @else
      
              @endif
            @endforeach
           
            
            @endauth
            
          @endif
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->