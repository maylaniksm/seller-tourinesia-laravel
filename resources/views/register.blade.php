<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 02:09:38 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template" />
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Seller Tourinesia</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <script src="https://kit.fontawesome.com/9329f29326.js" crossorigin="anonymous"></script>

</head>

<body class="vh-100">
<div>
     <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<!-- <a href="index.html"><img src="images/logo-full.png" alt=""></a> -->
                                        <center><h2>TOURINESIA</h2></center>
									</div>
                                    <h4 class="text-center mb-4">Daftarkan Akun Anda</h4>
                                    <form action="register" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Nama Pengguna</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama Pengguna" is-invalid>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Nama</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Alamat Email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Tanggal Lahir</strong></label>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Jenis Kelamin</strong></label>
                                            <input type="text" class="form-control" placeholder="Jenis Kelamin">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Kata Sandi</strong></label>
                                            <input type="password" class="form-control" placeholder="Kata Sandi">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Konfirmasi Kata Sandi</strong></label>
                                            <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        </div>
                                         <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>
                                        <hr>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                        </a>
                                    </form>
                                    <div class="new-account mt-3">
                                        <center><p>Sudah Punya Akun? <a class="text-primary" href="login">Masuk!</a></p></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<!-- <script src="js/styleSwitcher.js"></script> -->
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 02:09:38 GMT -->
</html>