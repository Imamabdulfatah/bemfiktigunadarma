
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/adides.png" />
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/admin/vendor/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/admin/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="width: 100px; height: 370px"></div>
                            <div class="col-lg-6">
                                <div class="p-5">

                                   
                                    
                                    <div class="text-center">
                                        <h1 class="font-blue fs-3 mb-4 custom-text">Login Anggota</h1>
                                    </div>

                                   
                                    <form method="post" action="/login" class="user">
                                      @csrf
                                        <label>Email</label>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email">
                                        </div>
                                        <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan password">
                                        </div> 
                                        <button type="submit" class="btn btn-user btn-block" style="background:  #5693C4; color: #fff">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="register-text my-lg-4 mx-auto">
                                <label>Jika belum memiliki akun silahkan lakukan <a href="/register">Registrasi</a></label>
                            </div>
                            <div class="register-text my-lg-4 mx-auto">
                              <label>Jika lupa password silahkan lakukan<a href="/forgot-password">Reset Password</a></label>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

