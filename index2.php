<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengaduan Masyarakat - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
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

    .text-primary,
    .text-gray-900 {
      color: #ffffff !important;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
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
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Aplikasi Pengaduan! Login Petugas / Admin.</h1>
                  </div>
                  <form class="user" method="post" action="proses-login2.php">
                    <div class="form-group">
                      <input name="username" type="text" class="form-control form-control-user" placeholder="Masukan Username Anda..." required>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" placeholder="Masukan Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block btn-custom">
                      Login
                    </button>
                    <hr>
                    <a href="index.php" class="btn btn-success btn-user btn-block btn-custom">
                      <i class="fa fa-laptop fa-fw"></i> Kembali Ke Login Masyarakat
                    </a>
                  </form>
                </div>
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
