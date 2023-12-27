<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tambahan CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('assets/AdminLTE/image/regis.png'); /* Ganti dengan path gambar background yang diinginkan */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-box {
            margin: 5% auto;
            width: 400px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang form dengan opacity */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            opacity: 0.9; /* Atur tingkat opacity di sini (0.0 - 1.0) */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-box">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-4">Registrasi</h3>
                    <form id="registerForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select class="form-control" name="role" id="role" required>
                                <option value="dokter">Dokter</option>
                                <option value="pasien">Pasien</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" onclick="registerUser()">Registrasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function registerUser() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var role = document.getElementById('role').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_register.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: response.message,
                            timer: 3000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location.href = 'login.php';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                }
            };
            var data = 'username=' + username + '&password=' + password + '&role=' + role;
            xhr.send(data);
        }
    </script>
</body>
</html>
