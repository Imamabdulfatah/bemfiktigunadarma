
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/foto/adides.png" />
    <link href="plugin/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="plugin/admin/vendor/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="plugin/admin/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugin/css/style.css">

</head>

<body class="bg-gradient-primary">

    <!-- Main Container -->
<main id="main-container" class="mx-lg-5">
    <div class="card my-lg-5" >
        <div class="card-body">
            <div class="content">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="block block-rounded">
                        <div class="block-content">
                            <form action="panel/registrasi" method="post">
                              @csrf
                                <div class="text-center">
                                        <h1 class="font-blue fs-3 mb-4 custom-text">Registrasi Anggota</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="no_identitas_ktp">Kode Cabang</label>
                                                <select name="cabang" id="cabang" class="form-control"
                                                    >
                                                    <option value="Pilihan 1">01-Aceh</option>
                                                    <option value="Pilihan 2">02-Sumatera Utara</option>
                                                    <option value="Pilihan 2">03-Sumatera Barat</option>
                                                    <option value="Pilihan 2">04-Riau</option>
                                                    <option value="Pilihan 2">05-Kepulauan Riau</option>
                                                    <option value="Pilihan 2">06-Jambi</option>
                                                    <option value="Pilihan 2">07-Bengkulu</option>
                                                    <option value="Pilihan 2">08-Sumatera Selatan</option>
                                                    <option value="Pilihan 2">09-Kepulauan Bangka Belitung</option>
                                                    <option value="Pilihan 2">10-Lampung</option>
                                                    <option value="Pilihan 2">11-Banten</option>
                                                    <option value="Pilihan 2">12-DKI Jakarta</option>
                                                    <option value="Pilihan 2">13-Jawa Barat</option>
                                                    <option value="Pilihan 2">14-Jawa Tengah</option>
                                                    <option value="Pilihan 2">15-DI Yogyakarta</option>
                                                    <option value="Pilihan 2">16-Jawa Timur</option>
                                                    <option value="Pilihan 2">17-Bali</option>
                                                    <option value="Pilihan 2">18-Nusa Tenggara Barat</option>
                                                    <option value="Pilihan 2">19-Nusa Tenggara Timur</option>
                                                    <option value="Pilihan 2">20-Kalimantan Barat</option>
                                                    <option value="Pilihan 2">21-Kalimantan Tengah</option>
                                                    <option value="Pilihan 2">22-Kalimantan Selatan</option>
                                                    <option value="Pilihan 2">23-Kalimantan Timur</option>
                                                    <option value="Pilihan 2">24-Kalimantan Utara</option>
                                                    <option value="Pilihan 2">25-Sulawesi Utara</option>
                                                    <option value="Pilihan 2">26-Gorontalo</option>
                                                    <option value="Pilihan 2">27-Sulawesi Tengah</option>
                                                    <option value="Pilihan 2">28-Sulawesi Barat</option>
                                                    <option value="Pilihan 2">29-Sulawesi Selatan</option>
                                                    <option value="Pilihan 2">30-Maluku</option>
                                                    <option value="Pilihan 2">31-Maluku Utara</option>
                                                    <option value="Pilihan 2">32-Papua</option>
                                                    
                                                </select>
                                            </div>
                                         
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bunga">Tipe Keanggotaan</label>
                                                <select name="bunga" id="bunga" class="form-control" >
                                                    <option value="Pilihan 1">New</option>
                                                    <option value="Pilihan 2">Extended</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-lg-3">
                                        <h4 for="no_identitas_ktp" class="custom-text font-blue">Log Info</h4>
                                        <div class="row d-flex">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="kewarganegaraan">Alamat Email</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        placeholder="Masukkan Alamat Email" 
                                                    value="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="status_rekening">Password</label>
                                                    <input type="password" name="password1" id="password1" class="form-control"
                                                        placeholder="6 Karakter Password "  >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="status_rekening">Konfirmasi Password</label>
                                                    <input type="password" name="password2" id="password2" class="form-control"
                                                        placeholder="Konfirmasi Password "  >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-lg-3">
                                        <h4 for="no_identitas_ktp" class="custom-text font-blue">Personal Info</h4>
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nidn">NIDN / NIDK</label>
                                                    <input type="text" name="nidn" id="nidn" class="form-control"
                                                        placeholder="Masukkan NIDN / NIDK" value="nidn" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Panjang</label>
                                                    <input type="text" name="nama" id="nama" class="form-control"
                                                        placeholder="Masukkan Nama Panjang" value="nama" >
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="gelar_dpn">Gelar Depan</label>
                                                    <input type="text" name="gelar_dpn" id="gelar_dpn" class="form-control"
                                                        placeholder="Masukkan Gelar Depan" value="gelar_dpn" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="gelar_blkg">Gelar Belakang</label>
                                                    <input type="text" name="gelar_blkg" id="gelar_blkg" class="form-control"
                                                        placeholder="Masukkan Gelar Belakang" value="gelar_blkg" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="kelamin">Jenis Kelamin</label>
                                                    <select name="kelamin" id="kelamin" class="form-control" >
                                                        <option value="Laki - Laki">Laki - Laki </option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                                        placeholder="Masukkan Tempat Lahir" value="tempat_lahir" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                        value="Y-m-d" class="form-control"
                                                        placeholder="Masukkan tanggal_lahir"  min="1950-01-01">
                                                    <p class="custom-text font-bule fs-12">*format (DD/MM/YYYY)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat Rumah</label>
                                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                                        placeholder="Masukkan Alamat Rumah" value="alamat" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_hp">Nomor Handphone</label>
                                                    <input type="text" name="no_hp" id="no_hp" class="form-control"
                                                        placeholder="Masukkan Nomor Handphone" value="no_hp">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-lg-3">
                                        <h4 for="no_identitas_ktp" class="custom-text font-blue">Instansi</h4>
                                            <div class="form-group">
                                                <label for="nama_instansi">Nama Instansi</label>
                                                <input type="text" name="nama_instansi" id="nama_instansi" class="form-control"
                                                    placeholder="Masukkan Nama Instansi" value="nama_instansi" >
                                            </div>
                                           <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jenis_rekening">Alamat</label>
                                                        <input type="text" name="alamat_instansi" id="alamat_instansi" class="form-control"
                                                        placeholder="Alamat Instansi"  value="alamat_instansi">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label for="jenis_rekening">Posisi</label>
                                                            <input type="text" name="posisi" id="posisi" class="form-control"
                                                            placeholder=""  value="posisi">
                                                    </div>
                                                </div>
                                           </div>
                                    </div>
                                    <div class="col-md-12 my-lg-3">
                                        <h4 for="no_identitas_ktp" class="custom-text font-blue">Edukasi</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="s1">S1 Universitas</label>
                                                        <input type="text" name="s1" id="s1" class="form-control"
                                                        placeholder="" value="s1" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="fakultas_s1">Fakultas</label>
                                                        <input type="text" name="fakultas_s1" id="fakultas_s1" class="form-control"
                                                        placeholder=""  value="fakultas_s1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="jurusan_s1">Jurusan</label>
                                                        <input type="text" name="jurusan_s1" id="jurusan_s1" class="form-control"
                                                        placeholder="" value="jurusan_s1" >
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row">
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="s2">S2 Universitas</label>
                                                            <input type="text" name="s2" id="s2" class="form-control"
                                                            placeholder=""  value="s2">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="fakultas_s2">Fakultas</label>
                                                            <input type="text" name="fakultas_s2" id="fakultas_s2" class="form-control"
                                                            placeholder="" value="fakultas_s2" >
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="jurusan_s2">Jurusan</label>
                                                            <input type="text" name="jurusan_s2" id="jurusan_s2" class="form-control"
                                                            placeholder="" value="jurusan_s2" >
                                                          
                                                        </div>
                                                </div>
                                           </div>
                                           <div class="row">
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="s3">S3 Universitas</label>
                                                            <input type="text" name="s3" id="s3" class="form-control"
                                                            placeholder="" value="s3" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="fakultas_s3">Fakultas</label>
                                                            <input type="text" name="fakultas_s3" id="fakultas_s3" class="form-control"
                                                            placeholder="" value="fakultas_s3" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="jurusan_s3">Jurusan</label>
                                                            <input type="text" name="jurusan_s3" id="jurusan_s3" class="form-control"
                                                            placeholder="" value="jurusan_s3" >
                                                        </div>
                                                </div>
                                           </div>
                                           <div class="row">
                                                <div class="form-group row col-12">
                                                    <div class="col-12">
                                                        <label class="fw-medium form-label">Foto</label><br>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="foto"
                                                                data-toggle="custom-file-input" required>
                                                            <label class="custom-file-label">Pilih Foto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
                                    </div>
                                    <div class="mx-auto">
                                        <div class="form-group mx-auto">
                                                <button type="submit" name="submit" class="btn btn-orange m-auto primary-text fs-14 px-3">Registrasi</button>
                                        </div>
                                      
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>