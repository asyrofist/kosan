<?php include "header.php" ?>

<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == "blog") {
        include "blog.php";
    } elseif ($_GET['halaman'] == "sample_blog") {
        include "sample_blog.php";
    } else {
        include "404.php";
    }
} else {
    include "blog.php";
}
?>

<?php include "footer.php" ?>
