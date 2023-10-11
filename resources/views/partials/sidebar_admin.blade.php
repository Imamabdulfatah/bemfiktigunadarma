<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                {{-- <img src="/img/fspace-logo.png" height="120" alt="" srcset=""> --}}
                <h2>Pemira Admin</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item {{ ($active === "dashboard") ? 'active' : '' }}">
                            <a href="/dashboard-admin" class='sidebar-link'>
                                <i data-feather="home" width="20"></i> 
                                <span>Dashboard</span>
                            </a> 
                        </li>    
                        
                         
                        <li class='sidebar-title'>Data Peserta</li>

                        <li class="sidebar-item   {{ ($active === "sport") ? 'active' : '' }} ">
                            <a href="/dashboard-admin/vote" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i> 
                                <span>Data Voting</span>
                            </a> 
                           
                        </li>
                        <li class="sidebar-item {{ ($active === "art") ? 'active' : '' }}">
                            <a href="/dashboard-admin/vote-pendaftaran" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i> 
                                <span>Pendaftaraan</span>
                            </a>                   
                          
                        </li>    
                        <li class='sidebar-title'>Hasil</li>
                        <li class="sidebar-item  ">
                            <a href="/dashboard-admin/hasil" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i> 
                                <span>Hasil Voting</span>
                            </a>                     
                        </li>            
                        <li class='sidebar-title'>Pages</li>
                        <li class="sidebar-item  ">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" href="/" class='sidebar-link' style="background: white; border:none">
                                    <i data-feather="log-out" width="20" class="ml-4"></i> 
                                    <span>Logout</span> 
                                </button> 
                            </form>                   
                        </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">
        <nav class="navbar navbar-header navbar-expand navbar-light">
            <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
            <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                    <li class="dropdown nav-icon">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="bell"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                            <h6 class='py-2 px-4'>Notifications</h6>
                            <ul class="list-group rounded-none">
                                <li class="list-group-item border-0 align-items-start">
                                    <div class="avatar bg-success me-3">
                                        <span class="avatar-content"><i data-feather="home"></i></span>
                                    </div>
                                    <div>
                                        <h6 class='text-bold'>Selamat Datang 👋</h6>
                                        <p class='text-xs'>
                                            Selamat datang admin silahkan periksa data 
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown nav-icon me-2">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="mail"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" >
                            <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                            <div class="dropdown-divider"></div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" href="/" class='sidebar-link' style="background: white; border:none">
                                    <i data-feather="log-out" width="20" class="mx-3"></i> 
                                    <span>Logout</span> 
                                </button> 
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            {{-- <div class="d-none d-md-block d-lg-inline-block">Welcome, {{ auth()->user()->name }}</div> --}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" href="/" class='sidebar-link' style="background: white; border:none">
                                    <i data-feather="log-out" width="20" class="mx-3"></i> 
                                    <span>Logout</span> 
                                </button> 
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

