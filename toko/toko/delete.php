<?php
require "config/koneksi.php";

    $db = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$_GET[id]'");
    $produk = mysqli_fetch_assoc($db);
    $fotoproduk = $produk['foto_produk'];

    mysqli_query($koneksi,"DELETE FROM produk WHERE id_produk='$_GET[id]'");
    echo "<script>location='index.php?t=produk'</script>";
?>