        <?php
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
        $pecah = $ambil->fetch_assoc();

        if (isset($_POST['ubah'])) {
          $koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]',
          harga_produk = '$_POST[harga]', berat_produk = '$_POST[berat]',
          foto_produk = '$_POST[foto]', deskripsi_produk = '$_POST[deskripsi]'
          WHERE id_produk = '$_GET[id]'");
          echo "<script>alert('Data berhasil diubah')</script>";
          echo "<script>location = 'index.php?halaman=produk'</script>";
        }

        ?>


        <!-- <pre><?php print_r($pecah); ?></pre> -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Ubah Produk</h1>
          <p class="mb-4">Berikut ini adalah Tabel Ubah Produk.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Ubah Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $pecah['harga_produk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="text" class="form-control" name="berat" value="<?php echo $pecah['berat_produk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"><?php echo $pecah['deskripsi_produk'] ?>
                  </textarea>
                  </div>
                  <div class="form-group">
                    <label for="foto">foto</label>
                    <input type="text" class="form-control" name="foto" value="<?php echo $pecah['foto_produk'] ?>">
                  </div>
                  <button class="btn btn-primary" name="ubah">Ubah</button>
                  <a href="index.php?halaman=produk" class="btn btn-danger">Kembali</a>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
