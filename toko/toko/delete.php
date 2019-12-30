<?php
require "config/koneksi.php";

$id = $_POST['id'];

    $db = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$_GET[id]'");
    $produk = mysqli_fetch_assoc($db);
    $fotoproduk = $produk['foto_produk'];

    if(file_exists("assets/img/produk/$fotoproduk"))
    {
        unlink("$fotoproduk");
    }

    echo "<script>location='index.php?t=produk'</script>";
?>