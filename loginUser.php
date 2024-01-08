<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: 'Overlock SC', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('assets/images/back.jpg');
            background-size: 100%;
            font-size: 25px;
        }

        .login-container {
            display: flex;
            width: 1300px;
            max-width: 1500px;
            /* Ubah max-width sesuai kebutuhan */
            background-color: #fff;
            color: #186218;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        .left-container {
            flex: 1;
            overflow: hidden;
        }

        .left-container img {
            width: 400px;
            height: 400px;
            object-fit: contain;
            margin-left: 150px;
            margin-top: 160px;
            
        }

        .right-container {
            flex: 1;
            padding: 100px;
            /* Menambahkan padding untuk memperbesar area formulir */
        }

        .login-form {
            max-width: 400px;
            /* Sesuaikan dengan kebutuhan */
            margin: 0 auto;
        }

        .login-form h2 {
            text-align: center;
            /* Tengahkan judul */
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            /* Hapus border */
            border-bottom: 1px solid #ccc;
            /* Tambahkan garis bawah */
            outline: none;
            /* Hapus outline */
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-container">
            <img src="assets/images/konsultasi.png" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center"> LOGIN </h4>
                <p class="login-box-msg text-center">Silahkan login sebagai <span class="text-primary">Pasien</span> untuk melanjutkan
                    <br><br>
                    <form action="pages/loginUser/checkLoginUser.php" method="post">
                        <label for="nama">Username :</label>
                        <input type="text" class="form-control" name="username">

                        <label for="no_hp">Password :</label>
                        <input type="password" class="form-control" name="password" required>

                        <button type="submit" class="btn btn-block btn-success">
                            Login
                        </button>
                    </form>

            </div>
            <div class="text-center mt-3">
                <p>- Belum punya akun pasien? -</p>
                <a href="register.php" class="">
                    Register
                </a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>