<?php

    $id_produk = $_GET['id'];

    if(isset($_SESSION['cart'][$id_produk]))
    {
        $_SESSION['cart'][$id_produk]+=1; 
    }
    else
    {
        $_SESSION['cart'][$id_produk]=1;
    }

    echo "<script>location='index.php?p=keranjang'</script>";
    header('location:index.php?p=keranjang');
?>