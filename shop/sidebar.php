<!-- Masthead-->
<header class="masthead"></header>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <h1 class="my-4">Shop Name</h1>
      <div class="list-group">
        <?php  ?>
        <a href="index.php?halaman=shop" class="list-group-item">Toko, Kos & Kontrakan</a>
        <a href="index.php?halaman=keranjang" class="list-group-item">Keranjang</a>
        <a href="#" class="list-group-item"><?php echo $_SESSION['admin']['nama_lengkap'] ?></a>
        <a href="index.php?halaman=logout" class="list-group-item">Logout</a>
      </div>

    </div>
    <!-- /.col-lg-3 -->
