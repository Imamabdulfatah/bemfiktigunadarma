@extends('layouts.main')

@section('container')
    <section id="About" class="About mb-5" >
        <div class="container">
          <div class="row mb-4">
            <div class="col-sm-12 text-center">
              <h1>About</h1>
            </div>
          </div>
          <div class="row justiy-content-center">
            <div class="col-sm-6 text-justify" >
              <h5>VISI</h5>
               <p> Menjadi perusahaan yang bisa menjadi yang ramah lingkungan dan berkelanjutan, menjadi pemimpin pasar serta menjadi perusahaan skala internasional yang memiliki manajemen yang efisien dan selalu mengembangkan produk dan jasa yang inovatif </p>
      
              <h5>MISI</h5> 
              <li>1. perusahaan yang selalu mengutamakan pelanggan serta dapat dipercaya</li>
              <li>2. Perusahaan yang selalu inovatif dari produk maupun jasa</li>
              <li>3. Dasar manfaat, ramah lingkungan dan kesehatan pengguna</li>
              <li>4. Miliki kinerja yang efisien serta kretif dan adaptif</li>
              <li>5. menjadi perusahaan internasional serta brand yang terbaik</li>
             
            </div>
            <div class="col-sm-5 text-justify">
             
              <h5>TUJUAN DAN BIDANG USAHA</h5>
              <p>Imam Flora Fauna adalah perusahaan yang bergerak dibidang agribisnis, Arsitektur  dan konstruksi yang berkonsep berkelanjutan. </p>
              <p>yang fokus menjual ikan dalam negeri ikan air laut maupun ikan air tawar serta mejual sayuran segar dan tanaman hias yang variatif serta peternakan modern. </p>
              <p>menerima jasa desain rumah, desain taman dan kantor dengan konsep ramah lingkungan, inovatif serta kenyamanan pengguna.serta jasa kontruksi yang memiliki prinsip rapih, cepat ,serta sesuai keinginan pengguna.</p>
            </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-6 text-center" >
                <h2>Pendiri Perusahaan</h2>
    
                <h3>{{ $nama }}</h3>
                <p>{{ $email }}</p>
                <img src="img/{{ $image }}" alt="{{ $nama }}"  width="200" class="img-thumbnail rounded-circle">
            </div>
        </div>
       
      </section>

      <footer>
        <div class="container text-center bg-dark mb-2">
          <div class="row">
            <div class="col-sm-12 text-light">
              <p>&copy; copyright 2021 | buit with <i class="glyphicon glyphicon-heart "></i> by <a href="http://instagram.com/imamabdul8875">Imam Abdul Fatah</a>.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-light ">
             <a href="http://youtube.com/MotivasiInspirasi" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i>Subscribe to youtube</a>
            </div>
          </div>
        </div>
      </footer>
   
@endsection