<?php
session_start();
include "config.php";
if (isset($_POST['login'])) {
  $ambil = $koneksi->query("SELECT * FROM admin WHERE username = '$_POST[user]' AND username = '$_POST[pass]'");
  $cocok = $ambil->num_rows;
  if ($cocok == 1) {
    $_SESSION['admin'] = $ambil->fetch_assoc();
    echo "<div class='alert alert-success text-center'>Login sukses</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
  } else {
    echo "<div class='alert alert-danger text-center'>Login gagal</div>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Kosan Asyrofi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

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
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form method="post" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter Username..." name="user">
                    </div>
                    <!-- <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="user">
                    </div> -->
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                    <hr>
                    <a href="index.php" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="index.php?halaman=forgot-password">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index.php?halaman=register">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="../">Back To Homepage</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../admin/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../admin/js/sb-admin-2.min.js"></script>

</body>

</html>
