<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

        <!-- Favicons -->
    <link href="assetspemira/img/LOGO BEM FIKTI.png" rel="icon">
    <link href="assetspemira/img/LOGO BEM FIKTI.png" rel="apple-touch-icon">
    
    <link rel="shortcut icon" href="assetspemira/img/LOGO BEM FIKTI.png" type="image/x-icon">
    <link rel="stylesheet" href="/file/css/bootstrap.css" />
    <link rel="stylesheet" href="/file/vendors/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/file/css/app.css" />
    <link rel="stylesheet" href="/file/vendors/chartjs/Chart.min.css" />
    <link rel="stylesheet" href="/file/vendors/quill/quill.snow.css" />
    <link rel="stylesheet" href="/file/vendors/quill/quill.bubble.css" />
    <style>
        .hidden {
            display: none;
        }
    </style>
    
</head>
<body>
    {{-- @if ($sidebar === "sidebar") --}}
    {{-- @include('partials.sidebar') --}}
    {{-- @else
        @include('partials.sidebar_admin')
    @endif --}}

    @include('partials.sidebar_admin')
  

    @yield('container')

    @include('partials.footerPemiraDashboard')

    <script src="/file/js/feather-icons/feather.min.js"></script>
    <script src="/file/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/file/js/app.js"></script>
    <script src="/file/vendors/chartjs/Chart.min.js"></script>
    <script src="/file/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/file/js/pages/dashboard.js"></script>
    <script src="/file/js/main.js"></script>

    <script src="/file/vendors/quill/quill.min.js"></script>
    <script src="/file/js/pages/form-editor.js"></script>
    <script src="js/script.js"></script>
    <script src="js_main/script.js"></script>
    <script src="js_main/label.js"></script>
    
</body>
</html>
