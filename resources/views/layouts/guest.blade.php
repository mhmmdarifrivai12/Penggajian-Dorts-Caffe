<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dort's Caffe</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>

<style>
  body {
    background-image: url('/images/bgweb.png');
    background-size: cover; /* untuk mengisi seluruh area halaman */
    background-repeat: no-repeat; /* untuk menghindari pengulangan gambar */
  }

  /* public/css/custom.css */


</style>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width:200px; " class="img-circle elevation-5 border"/>
        </a>
    </div>
    <div class="card" style="border-radius: 100px; ">
        @yield('content')
    </div>
</div>

<!-- /.login-box -->

@vite('resources/js/app.js')
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}" defer></script>
</body>
</html>
