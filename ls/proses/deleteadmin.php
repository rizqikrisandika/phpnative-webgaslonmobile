<?php

    $db = mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin='$_GET[id]'");

    echo "<script>alert('Admin telah terhapus')</script>";
    echo "<script>location='index.php?page=admin'</script>";
?>