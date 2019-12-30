<?php
include 'config/koneksi.php';

    $id_pembelian = $_GET['id'];

        mysqli_query($koneksi,"UPDATE pembelian SET status_pembelian='Di kirim' WHERE id_pembelian='$id_pembelian'");
        echo "<script>alert('Succes')</script>";
        echo "<script>location='index.php?t=pemesanan'</script>";

?>