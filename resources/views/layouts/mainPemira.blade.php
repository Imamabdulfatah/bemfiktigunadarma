
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PEMIRA FIKTI UG 2023</title>
  <meta property="og:image" content="assets/images/LOGO3.png">
  <meta property="og:title" content="PEMIRA BEM FIKTI UG">
  <meta property="og:description"
    content="Mari ikuti pendaftaran atau pemilihan ketua dan wakil ketua BEM FIKTI Universitas Gunadarma">

  <!-- Favicons -->
  <link href="assets/images/LOGO3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo:ital@1&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetspemira/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetspemira/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetspemira/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetspemira/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetspemira/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetspemira/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetspemira/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetspemira/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="assetspemira/carousel-custom/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assetspemira/carousel-custom/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="assetspemira/carousel-custom/css/style.css">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body>
    @if ($active === "login")
      @include('partials.navbarLogin')
    @else
      @include('partials.navbarPemira')
    @endif

    @yield('pemira')
  
    @include('partials.footerPemira')
    


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assetspemira/js/main.js"></script>
  <script src="assetspemira/carousel-custom/js/jquery.min.js"></script>
  <script src="assetspemira/carousel-custom/js/popper.js"></script>
  <script src="assetspemira/carousel-custom/js/bootstrap.min.js"></script>
  <script src="assetspemira/carousel-custom/js/owl.carousel.min.js"></script>
  <script src="assetspemira/carousel-custom/js/main.js"></script>

</body>

</html>