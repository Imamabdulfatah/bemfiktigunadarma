@extends('layouts.main')
@section('container')


    

    <div id="carouselExampleIndicators" class="carousel slid mt-lg-5 pt-lg-5" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->
      </ol>
      <div class="carousel-inner mt-lg-5 h-25">
        <div class="carousel-item">
          <img class="d-block w-100 slider" src="assets/foto/banner.jpeg" alt="First slide">
        </div>
        <div class="carousel-item active mt-lg-5">
          <img class="d-block w-100 slider h-50 " src="assets/foto/banner.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slider" src="assets/foto/slider_utama2.jpeg" alt="Third slide" style="height: 520px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slider" src="assets/foto/slider_utama.jpeg" alt="Fourth slide" style="height: 520px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slider" src="assets/foto/slider5.jpeg" alt="Fifth slide" style="height: 520px">
        </div>
      </div>
    </div>

    <section class="container my-lg-5" id="tentang-kami">
        <div class="row justify-content-center">
            <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text" id="top-artikel">Tentang Kami</h1>
        </div>
        <div class="row my-lg-5 tentang-content">
            <div class="col-4 tentang-image">
                <img class="mx-lg-4 tentang-image" src="assets/foto/tentang.png" height="400" >
            </div>
            <div class="col-8 d-block gallery-feed">
                <h6 class="fs-4 text-justify my-lg-3">Ini adalah Organisasi Profesional/Akademis nirlaba yang berskala INTERNASIONAL, yang mengawasi semua Dosen universitas negeri/swasta, yang memiliki minat tinggi dalam melakukan ABMAS* yang berfokus pada kemajuan perusahaan-perusahaan milik desa.</h6>
                <h6 class="fs-4 text-justify my-lg-3">Konsep pendirian ADIDES pada awalnya merupakan salah satu hasil layanan masyarakat, yaitu PENGHARGAAN NASIONAL BUMDESA 2022 sesuai dengan Keputusan Rektor ITS, No. 1149/PKS/ITS/2022.</h6>
                <h6 class="fs-4 text-justify my-lg-3">Tugas Pokok dan Fungsi (TUPOKSI) ADIDES: menjadi mitra bagi PEMERINTAH PUSAT dan PEMERINTAH PROVINSI dalam menyediakan rekomendasi KEBIJAKAN PUBLIK, paparan BERSAMA lintas negara, KKN lintas negara, dan MAGANG DESA, hingga RENCANA AKSI untuk pengembangan desa, dengan prinsip penguatan ekonomi dan ekosistem pada UMKM/DESA/BUMDESA (PENINGKATAN TINGKAT DESA), seperti pengembangan Desa Pariwisata, Desa Devisa, Desa Agribisnis, melakukan KOLABORASI PENELITIAN / LAYANAN MASYARAKAT berbasis desa antara universitas negeri/swasta, dan sebagainya.</h6>
                <h6 class="fs-4 text-justify my-lg-3">
    Dalam menjalankan tugas pokok dan fungsinya, ADIDES bekerja sama dengan DRPM/LPPM di PROVINSI, melalui Asosiasi DRPM, untuk kerja sama administratif/pembagian anggaran dalam pengembangan kebijakan dan rencana aksi untuk pengembangan desa.</h6>
            </div>
        </div>
    </section>
    
    <section class="mx-lg-5 my-lg-5" >
        <div class="mx-3 title my-lg-5" id="kegiatan">
            <div class="d-flex gap-3 justify-content-center">
                <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text">Kegiatan</h1>
            </div>
        </div>
        <div class="row justify-content-center my-lg-5">
            <img class="w-25" src="assets/foto/kongres.jpeg" alt="">
        </div>
        <div class="row justify-content-center my-lg-3">
            <img class="w-50" src="assets/foto/rundown.png" alt="">
        </div>
        <div class="jumbotron jumbotron-content ">
            <div class="d-lg-flex kegiatan-one my-lg-4 justify-content-center">
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/certif.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="font-blue">Certification </h4>
                        <h6 class="fs-4 text-justify my-lg-3">Sertifikasi untuk Institusi dan Manajer BUMDESA/KOPOTREN.</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/training.png" class="card-img-top my-lg-5" alt="...">
                    <div class="card-body my-lg-4">
                        <h4 class="font-blue">Training</h4>
                        <h6 class="fs-4 text-justify my-lg-3">Pelatihan Kepemimpinan untuk calon Aktivis BUMDESA.</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/policy.png" class="card-img-top my-lg-5" alt="...">
                    <div class="card-body">
                        <h4 class="font-blue">Policy Recommendations</h4>
                        <h6 class="fs-4 text-justify my-lg-3">Rekomendasi Kebijakan yang mendukung poin 1 dan 2.</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/partner.png" class="card-img-top my-lg-5" alt="...">
                    <div class="card-body">
                        <h4 class="font-blue">Kedaireka/ABMAS partnership.</h4>
                        <h6 class="fs-4 text-justify my-lg-3">Kemitraan Kedaireka/ABMAS untuk Pengembangan DESA.</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="d-lg-flex kegiatan-one my-lg-4 justify-content-center">
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/knowledge.png" class="card-img-top my-lg-5" alt="...">
                    <div class="card-body">
                        <h4 class="font-blue">Knowledge Management</h4>
                        <h6 class="fs-4 text-justify my-lg-3">Pengelolaan Pengetahuan di Tingkat BUMDes Naik Level</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/coorperation.png" class="card-img-top my-lg-5" alt="...">
                    <div class="card-body my-lg-5">
                        <h4 class="font-blue">Co-operations</h4>
                        <h6 class="fs-4 text-justify my-lg-3">Kerjasama antara ADIDES dan APEDI</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/intern.png" class="card-img-top my-lg-5" alt="...">
                    <div class="card-body my-lg-5">
                        <h4 class="font-blue">KKN and INTERNSHIP</h4>
                        <h6 class="fs-4 text-justify my-lg-3">KKN dan MAGANG lintas negara.</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-lg-3" style="width: 18rem;">
                    <img src="assets/foto/search.png" class="card-img-top my-lg-4" alt="...">
                    <div class="card-body">
                        <h4 class="font-blue">Joint EXPOSURE ABMAS/ RESEARCH</h4>
                        <h6 class="fs-4 text-justify my-lg-3">Pemaparan Gabungan lintas negara ABMAS/ PENELITIAN kerangka SDGs</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="mx-lg-5 my-lg-5 p-lg-5" id="podcast">
        <div class="mx-3 title my-lg-5">
            <div class="d-flex gap-3  justify-content-center">
                <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text">Podcast</h1>
            </div>
        </div>
        <div class="text-center p-4 d-flex justify-content-center">
            <div class="mx-lg-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/36Q3-BQIi4A?si=Y0_qKS14VXNtwoVL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="mx-lg-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/36Q3-BQIi4A?si=Y0_qKS14VXNtwoVL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    
    
    <section class="mx-lg-5 my-lg-5 p-lg-5" id="jurnal">
        <div class="mx-3 title my-lg-5">
            <div class="d-flex gap-3 justify-content-center">
                <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text">Jurnal</h1>
            </div>
        </div>
        <div class="text-center p-4">
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio minus expedita est non. Consequatur ipsa exercitationem tenetur nihil eum architecto totam officia recusandae, dolorum fugiat nulla dolore hic? Culpa aliquid fugiat, fuga quibusdam nihil animi voluptatum repellendus. Non ea iure vitae tempora velit provident veritatis autem harum asperiores voluptas beatae illum, doloribus vel? Illo possimus deleniti voluptatem quibusdam ratione doloremque nobis accusantium ea sequi sunt, cupiditate repudiandae id. Quis nulla deleniti, numquam recusandae eligendi doloribus soluta aut tempora nam fuga optio impedit eius corrupti architecto? Minus repellat dolorem quaerat praesentium, modi mollitia rem eligendi! Fuga, iusto minus reiciendis voluptate laudantium vero magni recusandae ab iste error autem veniam harum rerum? Voluptas est ad obcaecati. Similique asperiores non, voluptas quia dolorum minima amet totam, praesentium error eveniet odit fugiat possimus aliquid ad magnam nam iste ipsa ut architecto adipisci aperiam! Nisi nulla iusto officiis natus amet soluta explicabo cumque adipisci. Beatae quidem iure perspiciatis asperiores libero assumenda incidunt nostrum voluptas atque voluptate repudiandae nesciunt delectus ipsa quasi temporibus, accusamus sunt. Atque explicabo sit recusandae praesentium, molestias consequuntur odio! Id laudantium quam facere atque eum sint quasi non velit eveniet, accusamus nam autem quisquam ratione illum, molestias voluptate ipsa architecto. Cum sequi neque atque architecto earum ab delectus assumenda consequuntur quaerat, quae iure dicta aut corporis officia praesentium! Delectus eius dolorum impedit aliquam officia perferendis voluptatibus architecto qui at hic nisi cumque veritatis quod libero minima fugit, beatae possimus officiis rerum omnis excepturi. Neque aliquid voluptate beatae sunt atque ut deleniti impedit in unde perspiciatis veniam non ad saepe provident deserunt pariatur, soluta ea voluptas voluptatum illum ratione. Tenetur necessitatibus esse qui deserunt illum, laboriosam, eos quae earum corporis molestiae veritatis odit facere minus consequatur quam quod enim placeat dolorem magnam repellat itaque a atque reprehenderit. Error facilis est cum consequuntur praesentium molestiae sit exercitationem aut in voluptatem explicabo doloribus illo, odio nemo ad iure, maiores sequi maxime? Ut possimus nemo perspiciatis totam sed iure fugit. Soluta, sequi neque! Culpa officiis corporis architecto fuga fugiat incidunt accusamus nihil quidem perferendis similique! Vitae ad delectus iste illum non expedita blanditiis dolores, labore, natus repellendus voluptatum pariatur. Ratione eum iure est. Nihil possimus minima earum sit placeat. Quam a sed ipsam veritatis placeat odit nostrum perferendis modi asperiores ea, reprehenderit nobis repudiandae minus eveniet distinctio minima? Dolores qui vitae repudiandae placeat expedita laudantium doloremque fuga ad nulla atque reprehenderit temporibus nostrum ipsum dolore impedit cupiditate, natus repellendus ducimus facere accusamus eaque voluptatibus enim aliquid necessitatibus? Minima tempora numquam sint corrupti maxime quaerat, atque animi ullam sed placeat sequi dolore aut explicabo porro quos adipisci dicta laboriosam soluta beatae velit architecto officiis. Animi temporibus deleniti obcaecati quis voluptatem, exercitationem provident asperiores autem! Nisi explicabo asperiores quae, ut molestias perspiciatis cumque, cupiditate vitae dolor accusamus adipisci. Facere iusto quasi minus cupiditate quas earum at deserunt magnam laboriosam voluptates! Corporis id dignissimos optio magnam officiis, fugit soluta cupiditate illo maiores nesciunt dicta repellat aliquid dolorem molestias veritatis quos quis molestiae explicabo dolores libero tenetur? In, vitae inventore?</p>
        </div>
    </section> 
    
    <section class="mx-lg-5 my-lg-5 p-lg-5" id="menu1">
        <div class="mx-3 title my-lg-5">
            <div class="d-flex gap-3 justify-content-start">
                <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text">Menu 1</h1>
            </div>
        </div>
        <div class="text-center p-4">
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio minus expedita est non. Consequatur ipsa exercitationem tenetur nihil eum architecto totam officia recusandae, dolorum fugiat nulla dolore hic? Culpa aliquid fugiat, fuga quibusdam nihil animi voluptatum repellendus. Non ea iure vitae tempora velit provident veritatis autem harum asperiores voluptas beatae illum, doloribus vel? Illo possimus deleniti voluptatem quibusdam ratione doloremque nobis accusantium ea sequi sunt, cupiditate repudiandae id. Quis nulla deleniti, numquam recusandae eligendi doloribus soluta aut tempora nam fuga optio impedit eius corrupti architecto? Minus repellat dolorem quaerat praesentium, modi mollitia rem eligendi! Fuga, iusto minus reiciendis voluptate laudantium vero magni recusandae ab iste error autem veniam harum rerum? Voluptas est ad obcaecati. Similique asperiores non, voluptas quia dolorum minima amet totam, praesentium error eveniet odit fugiat possimus aliquid ad magnam nam iste ipsa ut architecto adipisci aperiam! Nisi nulla iusto officiis natus amet soluta explicabo cumque adipisci. Beatae quidem iure perspiciatis asperiores libero assumenda incidunt nostrum voluptas atque voluptate repudiandae nesciunt delectus ipsa quasi temporibus, accusamus sunt. Atque explicabo sit recusandae praesentium, molestias consequuntur odio! Id laudantium quam facere atque eum sint quasi non velit eveniet, accusamus nam autem quisquam ratione illum, molestias voluptate ipsa architecto. Cum sequi neque atque architecto earum ab delectus assumenda consequuntur quaerat, quae iure dicta aut corporis officia praesentium! Delectus eius dolorum impedit aliquam officia perferendis voluptatibus architecto qui at hic nisi cumque veritatis quod libero minima fugit, beatae possimus officiis rerum omnis excepturi. Neque aliquid voluptate beatae sunt atque ut deleniti impedit in unde perspiciatis veniam non ad saepe provident deserunt pariatur, soluta ea voluptas voluptatum illum ratione. Tenetur necessitatibus esse qui deserunt illum, laboriosam, eos quae earum corporis molestiae veritatis odit facere minus consequatur quam quod enim placeat dolorem magnam repellat itaque a atque reprehenderit. Error </p>
        </div>
    </section>
    
    <section class="mx-lg-5 my-lg-5 p-lg-5" id="galeri">
      <div class="d-flex gap-3 justify-content-center">
        <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text">Galeri</h1>
    </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
            
                <img class="d-block w-100 slider h-100" src="assets/foto/galeri1.jpg" alt="Second slide">
         
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
            
                <img class="d-block w-100 slider h-100" src="assets/foto/galeri2.jpg" alt="Second slide">
         
            </div>
          </div>
        </div>
      </div>

    </section>
    
    <section class="mx-lg-5 my-lg-5 p-lg-5" id="kontak">
        <div class="mx-3 title my-lg-5">
            <div class="d-flex gap-3 justify-content-center">
                <h1 class="fs-3 fw-medium lh-1 mb-3 mt-4 font-blue custom-text">Kontak Kami</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="row justify-content-center align-items-center">
                        <div>	
                            <a href="mailto:manlanjutgunadarma@gmail.com"><img
                                    src="https://img.icons8.com/color/48/000000/gmail-new.png" /></a>
                            <a href="https://twitter.com/bankinglab_ug"><img
                                    src="https://img.icons8.com/fluency/48/000000/twitter.png" /></a>
                            <a href="https://www.instagram.com/bankinglab_ug"><img
                                    src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>
                            <a href="https://wa.me/+6281389720564"><img
                                    src="https://img.icons8.com/color/48/000000/whatsapp--v2.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

@endsection

