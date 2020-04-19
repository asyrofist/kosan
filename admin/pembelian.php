        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pembelian</h1>
          <p class="mb-4">berikut ini adalah tabel Pembelian.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Pembelian</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pelanggan</th>
                      <th>Tanggal Pembelian</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pelanggan</th>
                      <th>Tanggal Pembelian</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $nomer = 1;
                    $ambil = $koneksi->query("SELECT*FROM pembelian JOIN pelanggan ON pembelian.id_pembelian = pelanggan.id_pelanggan");
                    while ($pecah = $ambil->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $nomer;  ?></td>
                        <td><?php echo $pecah['nama_pelanggan']; ?></td>
                        <td><?php echo $pecah['tanggal_pembelian'] ?></td>
                        <td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
                        <td>
                          <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-success">Detail</a>
                        </td>
                      </tr>
                    <?php } ?>
                    <?php $nomer++; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
