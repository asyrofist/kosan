<?php
// session_start();
include "sidebar.php";

if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
  echo "<script>alert('Produk kosong, silahkan belanja lebih dulu');</script>";
  echo "<script>location='index.php'</script>";
}

?>





<div class="col-lg-9">

  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <h2>Keranjang</h2>
  </div>

  <div class="row">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th class="text-center">No.</th>
          <th class="text-center">Produk</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Jumlah</th>
          <th class="text-center">Subhaga</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th class="text-center">No.</th>
          <th class="text-center">Produk</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Jumlah</th>
          <th class="text-center">Subhaga</th>
          <th class="text-center">Aksi</th>
        </tr>
      </tfoot>
      <tbody>
        <?php $nomor = 1;
        foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) :
          $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
          $pecah = $ambil->fetch_assoc();
          $subharga = $jumlah * $pecah['harga_produk'] ?>
          <!-- <pre>print_r($pecah);</pre> -->
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_produk'] ?></td>
            <td><?php echo $pecah['harga_produk'] ?></td>
            <td><?php echo $jumlah ?></td>
            <td><?php echo $subharga ?></td>
            <td><a href="index.php?halaman=hapus_keranjang" class="btn btn-danger btn btn-x5" onclick="return confirm('apakah anda yakin ingin menghapus')">Hapus</a></td>
          </tr>
          <?php $nomor++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="index.php?halaman=shop" class="btn btn-default">Lanjutkan Belanja</a>
    <a href="index.php?halaman=checkout" class="btn btn-success">checkout</a>

  </div>
  <!-- /.row -->

</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
