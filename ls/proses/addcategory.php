<?php require "../../config/koneksi.php" ?>

<?php
    if(isset($_POST['save']))
    {
            $kategori = $_POST['kategori'];
            mysqli_query($koneksi,"INSERT INTO kategori(nama_kategori)
            VALUES('$kategori')");

            echo "<script>alert('Data telah ditambah')</script>";
            echo "<script>location='../layout/product.php'</script>";
    }
?>