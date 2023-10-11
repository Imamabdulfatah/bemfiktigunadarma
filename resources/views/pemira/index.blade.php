@extends('layouts.mainPemira')

@section('pemira')
  <section id="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>PEMIRA FIKTI UG <span>2023</span></h1>
            <h2>Selamat datang di website Pemilihan Raya Ketua Umum & Wakil Ketua Umum BEM FIKTI</h2>
            
              <div class="row">
                <div class="col-lg-4 col-6"><h2 class="m-0">Jumlah voters : {{ $hitung }}  </h2></div>
                <div class="col-lg-8 col-6"><h1></h1></div>
              </div><br>
            
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Ayo Ramaikan !!!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="img/asset/KotakSuara.png" class="img-fluid animated">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section>

  <main id="main">
    <section id="about" class="about">
      <div class="container-fluid">
     
        <div class="row">
          @if (session()->has('success'))
          <div class="col-xl-10 mx-auto col-lg-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <div class="px-5 mx-auto">
                <h3><strong>{{ session('success') }}</strong></h3>
                <h3>Jangan Lupa kunjungi <a href="/">Website Bem FIKTI </a> </h3>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             
          </div>
          </div>
       
          @endif
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
            data-aos="fade-right">
            <a href="https://instagram.com/pemira_fiktiug" target="__blank" class="venobox play-btn mb-4"
              data-vbtype="video" data-autoplay="true"></a>
          </div>
         

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
            data-aos="fade-left">
            <h3>ABOUT PEMIRA</h3>
            <p>
              PEMIRA FIKTI UG 2023 (Pemilihan Raya Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Gunadarma) 
              adalah pemilihan Ketua Umum dan Wakil Ketua Umum BEM FIKTI UG Periode 2023/2024 sebagai bentuk 
              regenerasi terhadap kepengurusan BEM FIKTI UG. Pemira dilaksanakan setiap tahun, tahun ini Pemira hadir dengan 
              tema “Semangat Berdemokrasi dengan Bijak Memilih” serta hastag #BijakBerdemokrasi, 
              karena kami ingin mengajak Sobat FIKTI untuk berperan aktif dalam mengembangkan FIKTI berawal dari 
              memilih pemimpin BEM FIKTI UG periode 2023/2024.
            </p>

            <div class="row justify-content-center">
              <h3 class="timeline mb-2">Timeline :</h3>
              <div class="col-8 ">
                <img src="img/asset/timeline.jpeg" class="img-fluid">
              </div>
            </div>
            <div class="row justify-content-center mt-4">
              <div class="col-8 font-14">
                <a href="assetspemira/images/timeline.zip" class="btn btn-danger col-12 font-14">Download Timeline</a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <h1 class="text-center"
        style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #51706a; font-size: 10mm; letter-spacing: 6px;">
        PEMIRA FIKTI UG 2023</h1>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="rules" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assetspemira/img/details-2.png" class="img-fluid">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>PERSYARATAN UNTUK BISA MENGIKUTI VOTING</h3>
            <ul>
              <li><i class="bi bi-check"></i> Mahasiswa aktif FIKTI Universitas Gunadarma Angkatan 2019-2023. </li>
              {{-- <li><i class="bi bi-check"></i> Mempunyai akun Studentsite. </li> --}}
            </ul>
            <h3>CARA UNTUK MELAKUKAN VOTING </h3>
            <ul>
              <li><i class="bi bi-check"></i> Pemilih mengunjungi laman website PEMIRA FIKTI UG 2023 (<a href="https://fikti.bem.gunadarma.ac.id/pemira/" style="display: inline; font-weight: 400;" class="p-0 text-primary"><u>https://bemfiktigunadarma.com/pemira/</u></a>). </li>
              <li><i class="bi bi-check"></i> Pemilih Daftar menggunakan akun Website Bem FIKTI </li>
              <li><i class="bi bi-check"></i> Pemilih login menggunakan akun yang didaftarkan</li>
              <li><i class="bi bi-check"></i> Pemilih memilih pasangan Calon Ketua dan Wakil Ketua Umum BEM FIKTI UG periode 2023/2024 dengan mengklik Tombol Vote. </li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Details Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/person/rafi_.png" class="testimonial-img">
                <h3>Muhammad Rafi Salsabil</h3>
                <h4>Ketua Umum (2022-2023)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Every big step starts with the small step, setiap perubahan besar 
                    diawali dengen hal kecil. Mari membawa perubahan besar di FIKTI 
                    dengan langkah kecil, seperti ikut menyumbangkan suara di 
                    PEMIRA FIKTI UG.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/person/ruben_.png" class="testimonial-img">
                <h3>Ruben Werner</h3>
                <h4>Wakil Ketua Umum (2022-2023)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Mulai melangkah maju kedepan, tentukan arah tuk maju membawa perubahan. 
                    Keikutsertaan kalian sangat berarti untuk kemajuan FIKTI. 
                    Perubahan di masa depan tidak akan terwujud jika hanya diam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="candidates" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Candidates</h2>
          <p>These are the Candidates</p>
        </div>

        <div class="row justify-content-center">
           
          <div class="col-12 col-lg-6 col-md-6">
            <div class="mt-4">
              <div class="card pt-1">
                <div class="row px-3 pb-3 pt-0 content justify-content-center">
                  <div class="col-md-10" data-aos="fade-right">
                    <img src="img/person/paslon1.png" class="img-fluid" style="border-radius: 550px;">
                  </div>
                  <div class="col-md-12" data-aos="fade-up">
                    <center>
                    <h2 class="font-weight-bold text-white"><b>PASLON 1</b></h2>
                    <table>
                      <tr>
                        <td class="text-white">Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white">Fazri Zaenuri 
                        </td>
                      </tr>
                      <tr>
                        <td class="text-white">Wakil Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white">Lilis Apriyani
                        </td>
                      </tr>
                    </table>
                    </center>
                    <div class="container mt-4">
                    <center>
                      @auth
                        
                      @else
                        @foreach ($openclose as $opencloses)
                        @if ($opencloses->status === 'open')
                        <button type="button" class="btn button-customs col-8" data-toggle="modal" data-target="#myModal">
                          Vote Now
                        </button>
                        @else
                        <button type="button" class="btn button-customs col-8">
                          Vote Telah Ditutup
                        </button>
                
                        @endif
                        @endforeach
                    
                      @endauth
                    
                    </center><br>
                    </div>
                    <div class="faq-list mt-4">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#visi" class="collapsed"
                            class="font-weight-bold text-white">Visi<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="visi" class="collapse">
                          <p>Menjadi wadah yang kolaboratif dan relevan dalam pengembangan akademik dan non-akademik mahasiswa FIKTI UG, berperan sebagai media yang efektif dalam penyebaran informasi.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="faq-list">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#misi" class="collapsed"
                            class="font-weight-bold text-white">Misi<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="misi" class="collapse">
                           <p>1.Menyediakan program-program yang terstruktur dan berkelanjutan dengan memberikan pembelajaran, mentoring dan kompetisi serta dukungan yang diperlukan untuk membantu mencapai tujuan Mahasiswa FIKTI UG.</p>
                           <p>2. Menggunakan saluran komunikasi yang inklusif, seperti media sosial, situs web, dan grup diskusi, untuk memastikan setiap mahasiswa mendapatkan informasi diluar maupun di dalam lingkungan FIKTI UG.</p>
                           <p>3. Mengoptimalisasikan wadah layanan yang siap membantu mahasiswa dalam mengakses sumber daya kampus, memberikan dukungan konsultasi akademik, serta menjawab pertanyaan dan aspirasi kebutuhan mahasiswa FIKTI UG dengan responsif.
                          </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="faq-list">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#okr" class="collapsed"
                            class="font-weight-bold text-white">OKR<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="okr" class="collapse">
                           <p>Menyediakan program-program yang terstruktur dan berkelanjutan dengan memberikan pembelajaran, Mentoring dan Kompetisi serta dukungan yang diperlukan untuk membantu mencapai tujuan Mahasiswa FIKTI UG.
                            Mahasiswa FIKTI memiliki  wadah pengembangan skill set untuk menjawab kebutuhan industri dan kompetisi.</p>
                            <p>key result:</p>
                            <p>1. Tercapainya 4+ topik bootcamp yang relevan dengan kebutuhan mahasiswa fikti.</p>
                            <p>2. Tercapainya 450+ peserta dalam program pengembangan minat bakat.</p>
                            <p>3. FIKTI dapat memfasilitasi 20+ tim untuk kompetisi internal.</p>
                            <p>4. FIKTI dapat memfasilitasi pembentukan 10+ tim sebagai delegasi dalam kompetisi berskala nasional</p>
                            <p>5. 70% peserta mendapatkan insight dari program pengembangan minat bakat yang diikuti.</p>
                            <p>Menggunakan saluran komunikasi yang inklusif, seperti media sosial, situs web, dan grup diskusi, untuk memastikan setiap mahasiswa mendapatkan informasi diluar maupun di dalam lingkungan FIKTI UG. Meningkatkan engagement sosial media BEM FIKTI UG.</p>
                            <p>Key result:</p>
                            <p>1. Meningkatkan 1000+ followers instagram BEM FIKTI UG</p>
                            <p>2. Meningkatkan 250% total vidio views tiktok BEM FIKTI UG.</p>
                            <p>3. Meningkatkan 50%  impression di linkedin BEM FIKTI UG</p>
                            <p>Mengintegrasikan informasi program kerja melalui website BEM FIKTI UG.</p>
                            <p>Key result:</p>
                            <p>1. Setiap website pendaftaran program kerja dapat terintegrasi dengan website BEM FIKTI UG</p>
                            <p>2. Meningkatnya jumlah partisipan mahasiswa FIKTI UG dalam beberapa program kerja</p>
                            <p>Terjalinnya hubungan yang baik antar Mahasiswa/i FIKTI untuk bisa saling mengenal.</p>
                            <p>Key result:</p>
                            <p>1. Meningkatkan 5% partisipan mahasiswa fikti dalam seluruh program kerja.</p>
                            <p>Mengoptimalisasikan wadah layanan yang siap membantu mahasiswa dalam mengakses sumber daya kampus, memberikan dukungan konsultasi akademik, serta menjawab pertanyaan dan aspirasi kebutuhan mahasiswa FIKTI UG dengan responsif.
                              Optimalisasi program kerja Hotline FIKTI</p>
                            <p>key result:</p>
                            <p>1. Total Activation User : 350 mahasiswa FIKTI</p>
                            <p>2. Retention: 20% dari jumlah Activation User</p>
                            <p>3. Rata-rata response: 25 menit</p>
                            <p>4. 80% mahasiswa FIKTI UG yang menggunakan hotline FIKTI merasa puas dengan feedback yang diberikan</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             
          <div class="col-12 col-lg-6 col-md-6">
            <div class="mt-4">
              <div class="card pt-1">
                <div class="row px-3 pb-3 pt-0 content justify-content-center">
                  <div class="col-md-10" data-aos="fade-right">
                    <img src="img/person/paslon2.png" class="img-fluid" style="border-radius: 100px;">
                  </div>
                  <div class="col-md-12" data-aos="fade-up">
                    <center>
                    <h2 class="font-weight-bold text-white"><b>PASLON 2</b></h2>
                    <table>
                      <tr>
                        <td class="text-white">Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white">Dhiazul Fahaq Budiaji </td>
                      </tr>
                      <tr>
                        <td class="text-white">Wakil Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white">Fadri Oktavian
                        </td>
                      </tr>
                    </table>
                    </center>
                    <div class="container mt-4">
                    <center>
                      @auth
                        
                      @else
                        @foreach ($openclose as $opencloses)
                        @if ($opencloses->status === 'open')
                        <button type="button" class="btn button-customs col-8" data-toggle="modal" data-target="#myModal">
                          Vote Now
                        </button>
                        @else
                        <button type="button" class="btn button-customs col-8">
                          Vote Telah Ditutup
                        </button>
                
                        @endif
                        @endforeach
                      @endauth
                    
                    </center><br>
                    </div>
                    <div class="faq-list mt-4">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#visi2" class="collapsed"
                            class="font-weight-bold text-white">Visi<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="visi2" class="collapse">
                            <p>Menjadikan Badan Eksekutif yang terbuka dan berorientasi kepada kebutuhan serta keinginan mahasiswa FIKTI untuk membangun hubungan yang erat antara Badan Eksekutif dengan mahasiswa agar dapat menciptakan lingkungan kampus yang inklusif dan progresif.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="faq-list">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#misi2" class="collapsed"
                            class="font-weight-bold text-white">Misi<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="misi2" class="collapse">
                           <p>1. Memperkuat hubungan yang erat antara Badan Eksekutif dan mahasiswa FIKTI, dengan mendengarkan dan memahami kebutuhan serta keinginan Mahasiswa.</p>
                           <p>2. Berkomitmen untuk menyikapi, mengawal, dan mengadvokasikan peningkatan progresif dalam segala aspek kehidupan kampus.
                          </p>
                          <p>Meningkatkan performa BEM FIKTI UG dengan penggunaan OKR (Objective Key Result) untuk mencapai efisiensi yang lebih baik guna memperbaiki kualitas kinerja fungsionaris terhadap pelaksanaan program kerja.
                          </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="faq-list">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#okr2" class="collapsed"
                            class="font-weight-bold text-white">OKR<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="okr2" class="collapse">
                           <p>Membangun platform belajar bersama yang sesuai dengan peminatan akademik terhadap jurusan mahasiswa FIKTI.
                          </p>
                            <p>key result:</p>
                            <p>1. Tercapainya partisipasi mahasiswa FIKTI UG sebesar 5%. </p>
                            <p>2. Terbentuknya 3+ wadah pembelajaran yang aktif dan berkelanjutan. </p>
                            <p>3. 70% activation user dapat mempunyai portofolio untuk mempersiapkan diri dalam menghadapi dunia industri.</p>
                            <p>4. Tercapainya partisipasi pada kompetisi IT sebanyak 2 kali.</p>
                            <p>key product : Academic, development</p>
                           
                            <p>Menyediakan wadah pensosialisasian kegiatan MSIB kepada mahasiswa FIKTI dan menyediakan wadah pengaduan dan bantuan bagi mahasiswa FIKTI dalam mengatasi kendala pengurusan administrasi kegiatan MSIB kepada pihak kampus.
                            </p>
                            <p>Key result:</p>
                            <p>1. 80% Mahasiswa FIKTI mendapatkan pemahaman mereka mengenai kegiatan MSIB setelah mengikuti sesi pensosialisasian.</p>
                            <p>2. 80% jumlah kendala administrasi kegiatan MSIB yang berhasil diselesaikan melalui wadah pengaduan dan bantuan. </p>
                            <p>3. Tercapainya 15% activation user yang dapat lolos seleksi MSIB. </p>
                            <p>key product : Posko MSIB </p>

                            <p>Membangun platform penyebaran informasi mengenai magang dan lowongan kerja serta memperkuat jaringan ikatan alumni bagi mahasiswa FIKTI guna mendukung transisi mereka ke dunia kerja
                            </p>
                            <p>Key result:</p>
                            <p>1. Penyebaran informasi lowongan kerja dan magang dari 20 perusahaan.
                            </p>
                            <p>2. 70% Jumlah relasi dan kontak yang berhasil dibangun melalui ikatan alumni, yang dapat memberikan dukungan dan peluang dalam dunia kerja kepada mahasiswa FIKTI. </p>
                            <p>3. Mendapat impression sosial media sebesar 40.000+.  </p>
                            <p>key product : FIKTI Career Center
                              </p>
                           
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>

        <center>
          @auth
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  {{-- <h4 class="modal-title text-center text-danger">Access Denied</h4> --}}
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <h3>Terimakasih Sudah berpartisipasi</h3>
                 

                </div>
                
              </div>
            </div>
          </div>
          @else
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title text-center text-danger">Access Denied</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <h3>Silahkan Daftar Akun Website BEM FIKTI dan login terlebih dahulu untuk berpartisipasi dalam voting</h3>
                  <a href="/register" class="btn btn-success">Login</a>

                </div>
                
              </div>
            </div>
          </div>
          @endauth
         
        </center>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#faq-list-1">Apa itu Pemira FIKTI UG 2023 ?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Pemilihan Raya Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Gunadarma
                  atau PEMIRA FIKTI UG 2023 adalah pemilihan Ketua Umum dan Wakil Ketua Umum BEM
                  FIKTI Universitas Gunadarma Periode 2023/2024. Tahun ini Pemira hadir dengan tema
                  “Semangat Berdemokrasi dengan Bijak Memilih”
                </p>
              </div>
            </li>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" data-bs-target="#faq-list-2" 
                class="collapsed">Kapan pendaftaran Pemira FIKTI UG 2023 ?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Pendaftaran Calon Ketua Umum dan Wakil Ketua Umum BEM FIKTI 2023 - 2024 dilaksanakan pada
                  tanggal 12 Agustus 2023 - 16 Agustus 2023
                </p>
              </div>
            </li>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" data-bs-target="#faq-list-3" 
                class="collapsed">Dimana saya bisa mendapatkan informasi mengenai Pemira FIKTI UG 2023 ?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Kalian bisa mendapatkan informasinya melalui sosial media Pemira, yaitu : <br>
                  <i class="fa-brands fa-instagram" style="color: #e1306c;"></i> : <a
                    href="https://instagram.com/pemira_fiktiug" target="__blank" style="display: inline; font-weight: 400;"
                    class="p-0 text-primary"><u>instagram.com/pemira_fiktiug</u></a><br>
                  <i class="fa-brands fa-line text-success"></i> : @426zvjnz
                </p>
              </div>
            </li>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
                class="collapsed">Bagaimana cara mendaftar Pemira FIKTI UG 2023 ? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  - Pertama, Hubungi Narahubung untuk mendapatkan link pendaftaran <br>
                  - Kedua, Login dengan akun yang sudah dibuat sebelumnya <br>
                  - Ketiga, Lengkapi data dan berkas yang diperlukan
                </p>
              </div>
            </li>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
                class="collapsed">Bagaimana melengkapi berkas pendaftaran PEMIRA FIKTI UG 2023 ?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Seluruh berkas di-scan dan dilampirkan pada website pendaftaran calon Ketua Umum dan 
                  Wakil Ketua Umum BEM FIKTI UG Periode 2023/2024. Berkas dengan tanda tangan harus 
                  menggunakan tanda tangan asli (basah) dan Berkas yang bertanda (*) diserahkan 
                  dalam bentuk hardcopy ke panitia Pemira 2023 pada:<br>
                  Tanggal : 12, 13, 14 Agustus 2023 <br>
                  Waktu : 10.00 - 15.00 WIB <br>
                  Tempat : Pusgiwa kampus E Universitas Gunadarma <br>
                  Apabila peserta yang belum melampirkan berkas dengan lengkap hingga penutupan pendaftaran, 
                  maka peserta dianggap gugur dalam pencalonan ini.
                </p>
              </div>
            </li>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6"
                class="collapsed">Siapa yang dapat dihubungi jika ada kendala dalam proses pendaftaran Pemira FIKTI UG
                2023 ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Jika ada kendala proses pendaftaran Pemira FIKTI UG 2023, dapat menghubungi narahubung dibawah ini :
                  <br><br>
                  Narahubung 1
                  <br>
                  <i class="fa-brands fa-whatsapp text-success"></i> : 081413561508
                  <br>
                  <i class="fa-brands fa-line text-success"></i> : @moonul (Wulan)
                  <br><br>
                  Narahubung 2
                  <br>
                  <i class="fa-brands fa-whatsapp text-success"></i> :  087789086181
                  <br>
                  <i class="fa-brands fa-line text-success"></i> :  @anisaputrihariyanto
                  <br>
                </p>
              </div>
            </li>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7"
                class="collapsed">Apa itu Debat dan Eksplorasi ? <i class="bx bx-chevron-down icon-close"></i><i
                  class="bx bx-chevron-up icon-show"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Debat adalah kampanye yang dilakukan secara lisan oleh calon dalam forum daring berhadapan dengan
                  calon lain dalam membahas tema tertentu yang ditentukan oleh panitia.
                  <br>
                  Sementara Eksplorasi adalah ajang untuk masyarakat FIKTI dengan tujuan memperoleh pengetahuan lebih
                  banyak terhadap pasangan calon.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">

          <div class="info">
            <div class="row justify-content-center">

              <div class="col-lg-4 col-md-4 col-12 py-2">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <a href="https://www.google.com/maps/place/Universitas+Gunadarma+Kampus+D/@-6.3910528,106.8208827,14z/data=!4m9!1m2!2m1!1sgunadarma+depok!3m5!1s0x2e69ec11a33cd819:0x12ea682c158bc87d!8m2!3d-6.3686462!4d106.8333099!15sCg9ndW5hZGFybWEgZGVwb2uSAQp1bml2ZXJzaXR5">
                    <p>Jl. Margonda Raya No.345c, Depok, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
                  </a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 py-2">
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>pemirafikti2023@gmail.com</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 py-2">
                <a href="https://www.instagram.com/pemira_fiktiug/">
                  <div class="phone">
                    <i class="bi bi-instagram"></i>
                    <h4>Instagram</h4>
                    <p>@pemira_fiktiug</p>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection