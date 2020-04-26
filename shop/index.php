<?php include "header.php" ?>

<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == "shop") {
        include "shop.php";
    } elseif ($_GET['halaman'] == "item_shop") {
        include "item_shop.php";
    } elseif ($_GET['halaman'] == "beli") {
        include "beli.php";
    } elseif ($_GET['halaman'] == "keranjang") {
        include "keranjang.php";
    } elseif ($_GET['halaman'] == "login") {
        include "login.php";
    } elseif ($_GET['halaman'] == "logout") {
        include "logout.php";
    } elseif ($_GET['halaman'] == "hapus_keranjang") {
        include "hapus_keranjang.php";
    } else {
        include "404.php";
    }
} else {
    include "shop.php";
}
?>


<?php include "footer.php" ?>
