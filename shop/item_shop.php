<?php include "sidebar.php" ?>
<div class="col-lg-9">
  <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
  while ($perproduk = $ambil->fetch_assoc()) { ?>

    <div class="card mt-4">
      <img class="card-img-top img-fluid" src="<?php echo $perproduk['foto_produk'] ?>" alt="">
      <div class="card-body">
        <h3 class="card-title"><?php echo $perproduk['nama_produk'] ?></h3>
        <h4>Rp. <?php echo number_format($perproduk['harga_produk']) ?></h4>
        <p class="card-text"><?php echo $perproduk['deskripsi_produk'] ?></p>
        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        4.0 stars
        <a href="index.php?halaman=beli&id=<?php echo $perproduk['id_produk'] ?>" class="btn btn-primary text-center">Beli</a>

      </div>
    </div>
    <!-- /.card -->

  <?php } ?>

  <div class="card card-outline-secondary my-4">
    <div class="card-header">
      Product Reviews
    </div>
    <div class="card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
      <small class="text-muted">Posted by Anonymous on 3/1/17</small>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
      <small class="text-muted">Posted by Anonymous on 3/1/17</small>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
      <small class="text-muted">Posted by Anonymous on 3/1/17</small>
      <hr>
      <a href="#" class="btn btn-success">Leave a Review</a>
    </div>
  </div>
  <!-- /.card -->

</div>
<!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->
