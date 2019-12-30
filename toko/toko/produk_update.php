<?php
 require "config/koneksi.php";

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $img = $_FILES['gambar'];
        $new_img = 'img_'.date('YmdHis').'.png';
        $lokasi = $img['tmp_name'];
        if(!empty($lokasi)){
            move_uploaded_file($lokasi,"assets/img/produk/".$new_img);
            mysqli_query($koneksi,"UPDATE produk SET nama_produk='$nama',
            harga_produk='$harga',foto_produk='$new_img',stok_produk='$stok' WHERE id_produk=$id");
        }
        else{
            mysqli_query($koneksi,"UPDATE produk SET nama_produk='$nama',
            harga_produk='$harga',stok_produk='$stok' WHERE id_produk=$id");
        }

        header("location:index.php?t=produk");
                

