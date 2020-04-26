<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<?php include "topbar.php" ?>

<?php

if (!isset($_GET['halaman'])) {
  include "main.php";
}

if (isset($_GET['halaman'])) {
  if ($_GET['halaman'] == 'main') {
    include "main.php";
  } elseif ($_GET['halaman'] == 'produk') {
    include "produk.php";
  } elseif ($_GET['halaman'] == 'tambah_produk') {
    include "tambah_produk.php";
  } elseif ($_GET['halaman'] == 'hapus_produk') {
    include "hapus_produk.php";
  } elseif ($_GET['halaman'] == 'ubah_produk') {
    include "ubah_produk.php";
  } elseif ($_GET['halaman'] == 'pembelian') {
    include "pembelian.php";
  } elseif ($_GET['halaman'] == 'pelanggan') {
    include "pelanggan.php";
  } elseif ($_GET['halaman'] == 'detail') {
    include "detail.php";
  } elseif ($_GET['halaman'] == '404') {
    include "404.php";
  } elseif ($_GET['halaman'] == 'blank') {
    include "blank.php";
  } elseif ($_GET['halaman'] == 'buttons') {
    include "buttons.php";
  } elseif ($_GET['halaman'] == 'cards') {
    include "cards.php";
  } elseif ($_GET['halaman'] == 'charts') {
    include "charts.php";
  } elseif ($_GET['halaman'] == 'forgot-paassword') {
    include "forgot-paassword.php";
  } elseif ($_GET['halaman'] == 'login') {
    include "login.php";
  } elseif ($_GET['halaman'] == 'register') {
    include "register.php";
  } elseif ($_GET['halaman'] == 'tables') {
    include "tables.php";
  } elseif ($_GET['halaman'] == 'utilities-animation') {
    include "utilities-animation.php";
  } elseif ($_GET['halaman'] == 'utilities-border') {
    include "utilities-border.php";
  } elseif ($_GET['halaman'] == 'utilities-color') {
    include "utilities-color.php";
  } elseif ($_GET['halaman'] == 'utilities-other') {
    include "utilities-other.php";
  } else {
    include "main.php";
  }
}

?>
<?php include "footer.php" ?>
