<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pengaduan Masyarakat - Register</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
    <style>
    /* Animated Gradient Background */
    body {
        background: linear-gradient(to right, #0F2027, #203A43, #2C5364, #6FB1FC);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    @keyframes gradientBG {
        0% {background-position: 0% 50%;}
        50% {background-position: 100% 50%;}
        100% {background-position: 0% 50%;}
    }

    /* Glassmorphism Card */
    .card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        animation: fadeSlide 1s ease forwards;
        transform: translateY(20px);
        opacity: 0;
    }

    @keyframes fadeSlide {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-custom {
        border-radius: 50px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        transform: scale(1.05) translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    input.form-control {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #fff;
        transition: all 0.3s ease;
    }

    input.form-control::placeholder {
        color: #eee;
    }

    input.form-control:focus {
        background: rgba(255, 255, 255, 0.3);
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.2);
        border-color: #fff;
    }

    .text-primary {
        color: #ffffff !important;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    .text-muted {
        color: #dddddd !important;
    }

    .logo {
        width: 100px;
        margin-bottom: 15px;
        transition: transform 0.5s ease;
    }

    .logo:hover {
        transform: rotate(5deg) scale(1.1);
    }
</style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="text-center">
                        <h3 class="text-primary fw-bold">Daftar Akun Baru</h3>
                        <p class="text-muted">Silakan masukkan biodata Anda</p>
                    </div>
                    <form class="mt-3" method="post" action="proses-register.php">
                        <div class="mb-3">
                            <input name="nik" type="text" class="form-control" placeholder="Masukkan NIK Anda..." required>
                        </div>
                        <div class="mb-3">
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Anda..." required>
                        </div>
                        <div class="mb-3">
                            <input name="username" type="text" class="form-control" placeholder="Masukkan Username Anda..." required>
                        </div>
                        <div class="mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Masukkan Password" required>
                        </div>
                        <div class="mb-3">
                            <input name="telp" type="text" class="form-control" placeholder="Masukkan Nomor Telepon Anda..." required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 btn-custom">Register</button>
                        <hr>
                        <a href="index.php" class="btn btn-success w-100 btn-custom">
                            <i class="fa fa-sign-in-alt"></i> Sudah Punya Akun? Login
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
