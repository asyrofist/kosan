<?php include "header.php" ?>

<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == "home") {
        include "home.php";
    } elseif ($_GET['halaman'] == "blog") {
        include "blog/blog.php";
    } elseif ($_GET['halaman'] == "shop") {
        include "shop/shop.php";
    } else {
        include "404.php";
    }
} else {
    include "home.php";
}
?>


<?php include "footer.php" ?>
