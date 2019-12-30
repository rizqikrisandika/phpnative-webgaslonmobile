<?php
    $id_produk=$_GET['id'];
    unset($_SESSION['cart'][$id_produk]);

    echo "<script>alert('Product has been deleted');</script>";
    header('location:index.php?p=store');
?>