        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>
          <p class="mb-4">Berikut ini adalah Tabel Tambah Produk.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Tambah Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga">
                  </div>
                  <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="text" class="form-control" name="berat">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control">
                  </textarea>
                  </div>
                  <div class="form-group">
                    <label for="foto">foto</label>
                    <input type="text" class="form-control" name="foto">
                  </div>
                  <button class="btn btn-primary" name="save">Simpan</button>
                  <a href="index.php?halaman=produk" class="btn btn-danger">Kembali</a>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php
        if (isset($_POST['save'])) {
          $ambil = $koneksi->query("INSERT INTO produk (nama_produk, harga_produk, berat_produk, foto_produk, deskripsi_produk)
          VALUES ('$_POST[nama]', '$_POST[harga]', '$_POST[berat]', '$_POST[foto]', '$_POST[deskripsi]')");
          echo "<br><div class='alert alert-success text-center'>Data Berhasil dimasukkan</div>";
          echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=produk'>;";
        }
        ?>
