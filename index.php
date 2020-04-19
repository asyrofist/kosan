<?php include "header.php" ?>

<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == "home") {
        include "home.php";
    } else {
        include "home.php";
    }
} else {
    include "home.php";
}
?>


<?php include "footer.php" ?>
