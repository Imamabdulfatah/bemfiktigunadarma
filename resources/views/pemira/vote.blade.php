@extends('layouts.mainPemira')

@section('pemira')

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Halo <span style="border-bottom: unset;"> {{ auth()->user()->name }}</span></h1>
            <h2>Selamat datang di website Pemilihan Raya Ketua Umum & Wakil Ketua Umum BEM FIKTI</h2>
            <div class="text-center text-lg-start">
              <a href="#candidates" class="btn-get-started scrollto">Vote Sekarang !!!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="/assetspemira/images/LOGO3.png" class="img-fluid animated">
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
  <!-- End Hero -->


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
                        <td class="text-white">Fazri Zaenuri</td>
                      </tr>
                      <tr>
                        <td class="text-white">Wakil Ketua Umum </td>
                        <td class="px-3 text-white"> : lorem</td>
                        <td class="text-white">Lilis Apriyani</td>
                      </tr>
                    </table>
                    </center>
                    <div class="container mt-4">
                      <center>      
                        @if (auth()->user()->kandidat === null)
                            <form action="/vote" method="post">
                              @method('put')
                              @csrf
                              <input type="text" name="name"  value="{{ auth()->user()->name}}" hidden>
                              <input type="text" name="npm"  value="{{ auth()->user()->npm}}" hidden>
                              <input type="text" name="username"  value="{{ auth()->user()->username}}" hidden>
                              <input type="text" name="email"  value="{{ auth()->user()->email}}" hidden>
                              <input type="text" name="password"  value="{{ auth()->user()->password}}" hidden>
                              <input type="text" name="class"  value="{{ auth()->user()->class}}" hidden>
                              <input type="text" name="kandidat" value="1" hidden>
                              <input type="text" name="is_admin"  value="{{ auth()->user()->is_admin}}" hidden>
                              <button type="submit" name="submit" class="btn button-customs col-8" onclick="return confirm('Pilihan tidak dapat dibatalkan, apakah anda yakin?')">
                                Vote Now
                              </button>
                            </form> 
                        @else
                      
                         
                        @endif
                       
                       
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
                    <img src="img/person/paslon2.png" class="img-fluid" style="border-radius: 550px;">
                  </div>
                  <div class="col-md-12" data-aos="fade-up">
                    <center>
                    <h2 class="font-weight-bold text-white"><b>PASLON 2</b></h2>
                    <table>
                      <tr>
                        <td class="text-white">Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white">Dhiazul Fahaq Budiaji</td>
                      </tr>
                      <tr>
                        <td class="text-white">Wakil Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white">Fadri Oktavian</td>
                      </tr>
                    </table>
                    </center>
                    <div class="container mt-4">
                      <center>
                        @if (auth()->user()->kandidat === null)
                        <form action="/vote" method="post">
                          @method('put')
                          @csrf
                          <input type="text" name="name"  value="{{ auth()->user()->name}}" hidden>
                          <input type="text" name="npm"  value="{{ auth()->user()->npm}}" hidden>
                          <input type="text" name="username"  value="{{ auth()->user()->username}}" hidden>
                          <input type="text" name="email"  value="{{ auth()->user()->email}}" hidden>
                          <input type="text" name="password"  value="{{ auth()->user()->password}}" hidden>
                          <input type="text" name="class"  value="{{ auth()->user()->class}}" hidden>
                          <input type="text" name="kandidat" value="2" hidden>
                          <input type="text" name="is_admin"  value="{{ auth()->user()->is_admin}}" hidden>
                          <button type="submit" name="submit" class="btn button-customs col-8" onclick="return confirm('Pilihan tidak dapat dibatalkan, apakah anda yakin?')">
                            Vote Now
                          </button>
                        </form>
                        @else
                            
                        @endif
                       
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
      </div>
    </section><!-- End Team Section -->

    

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

              <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <a
                    href="https://www.google.com/maps/place/Universitas+Gunadarma+Kampus+D/@-6.3910528,106.8208827,14z/data=!4m9!1m2!2m1!1sgunadarma+depok!3m5!1s0x2e69ec11a33cd819:0x12ea682c158bc87d!8m2!3d-6.3686462!4d106.8333099!15sCg9ndW5hZGFybWEgZGVwb2uSAQp1bml2ZXJzaXR5">
                    <p>Jl. Margonda Raya No.345c, Depok, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
                  </a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>pemirafikti2022@gmail.com</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mb-4">
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