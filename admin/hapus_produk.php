<?php
$koneksi->query("DELETE FROM produk WHERE id_produk = '$_GET[id]'");
echo "<script>location = 'index.php?halaman=produk'</script>";
