<?php
      require "config/koneksi.php";
      if($_FILES['gambar']['error']==0){

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $img = $_FILES['gambar'];
        $new_img = 'img_'.date('YmdHis').'.png';


        if(copy($img['tmp_name'],"assets/img/produk/".$new_img)){
            $sft=mysqli_query($koneksi,"insert into produk (id_toko,nama_produk,harga_produk,stok_produk,foto_produk) values ('$id','$nama','$harga','$stok','$new_img')");
            if($sft) {
                header("location:index.php?t=produk");
            }
        }
      }


              