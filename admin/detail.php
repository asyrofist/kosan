        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Detail</h1>
          <p class="mb-4">berikut ini adalah tabel Detail.</p>

          <?php $ambil = $koneksi->query("SELECT*FROM pembelian
          JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan
          WHERE pembelian.id_pembelian = '$_GET[id]'"); ?>

          <?php $detail = $ambil->fetch_assoc(); ?>
          <strong><?php echo $detail['nama_pelanggan']; ?></strong> <br>
          <p>Telepon: <?php echo $detail['telepon_pelanggan']; ?> <br>
            email &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $detail['email_pelanggan']; ?></p>
          <p>Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
            Total &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo number_format($detail['total_pembelian']); ?></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Detail</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Harga Produk</th>
                      <th>Jumlah</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Harga Produk</th>
                      <th>Jumlah</th>
                      <th>Subtotal</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $nomer = 1;
                    $crop = $koneksi->query("SELECT*FROM pembelian_produk
                    JOIN produk ON pembelian_produk.id_produk = produk.id_produk
                    WHERE pembelian_produk.id_pembelian = '$_GET[id]'");
                    while ($split = $crop->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $nomer;  ?></td>
                        <td><?php echo $split['nama_produk']; ?></td>
                        <td>Rp. <?php echo number_format($split['harga_produk']); ?></td>
                        <td><?php echo $split['jumlah']; ?></td>
                        <td>Rp. <?php echo number_format($split['harga_produk'] * $split['jumlah']); ?></td>
                      </tr>
                      <?php $nomer++; ?>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
