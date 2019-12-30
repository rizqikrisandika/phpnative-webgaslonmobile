<?php
    $id_produk=$_GET['id'];
    unset($_SESSION['cart'][$id_produk]);

    echo "<script>alert('Product has been deleted');</script>";
    echo "<script>location='index.php?p=store'</script>";
?>