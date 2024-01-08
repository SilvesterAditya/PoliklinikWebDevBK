<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .container-fluid {
             background-image: url('assets/images/back.jpg');
             height: 500px;
             display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-size: cover; /* This will ensure that the image covers the entire container, but it may still be a bit zoomed in depending on the image's aspect ratio. */
            background-position: center; /* This centers the image in the container. */


        }

        .container-fluid h1, .container-fluid h5 {
            color: #000000;
        }

        .card {
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .btn {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #000000;
            color: #fff;
        }

        .testimonial-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: 20px;
            text-align: center;
        }

        .testimonial-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .img-box img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            width: 2000px;
        }

        .heading_container-heading_center {
            margin-top; 500px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container-fluid">
        <h1 class="font-weight-bold mb-3">Sistem Temu Janji Pasien - Dokter</h1>
        <h3>
            Poliklinik Doa Ibu
        </h3>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3>Pasien</h3>
                        <p class="card-text">Apabila anda adalah seorang Pasien, Silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai pasien</p>
                        <a href="loginUser.php" class="btn btn-primary btn-block">Login Sebagai Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user-nurse fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                        <h3>Dokter</h3>
                        <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                            memulai melayani pasien</p>
                        <div class="d-grid">
                            <a href="login.php" class="btn btn-success btn-block">Login Sebagai Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">

    </section>
           <!-- /.login-box -->
           <section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container-heading_center">
            <h2>Testimoni Pasien</h2>
            <p>Para Pasien Yang Setia</p>
        </div>
        <!-- Customer 1 -->
        <div class="testimonial-card my-4">
            <div class="card">
                <div class="card-content">
                    <div class="img-box">
                        <img src="assets/images/testimoni.jpg" alt="Client 1">
                    </div>
                    <div class="text-content">
                        <h6>Nopal</h6>
                        <p class="location">Semarang</p>
                        <p class="testimonial-text">Pelayanan di web ini sangat cepat dan mudah, detail histori tercatat lengkap, termasuk catatan obat, harga pelayanan terjangkau, dokter ramah pokoke mantab pol!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer 2 -->
        <div class="testimonial-card my-4">
            <div class="card">
                <div class="card-content">
                    <div class="img-box">
                        <img src="assets/images/testimoni1.jpg" alt="Client 2">
                    </div>
                    <div class="text-content">
                        <h6>Ilyas</h6>
                        <p class="location">Semarang</p>
                        <p class="testimonial-text">Aku tidak pernah merasakan mudahnya berobat sebelum mengenal web ini, web yang mudah digunakan dan dokter yang terampil membuat berobat menjadi lebih menyenangkan!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>
