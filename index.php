<?php include "header.php" ?>

<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == "home") {
        include "home.php";
    } else {
        include "404.php";
    }
} else {
    include "404.php";
}
?>


<?php include "footer.php" ?>
