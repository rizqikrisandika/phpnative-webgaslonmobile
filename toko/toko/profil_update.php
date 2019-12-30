<?php
      require "config/koneksi.php";
		$id = $_POST['id'];
        $no = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $img = $_FILES['gambar'];
        $new_img = 'img_'.date('YmdHis').'.png';
        //update
        if(empty($lokasi_file)){
            $query_update = "Update toko set nohp ='$no', alamat ='$alamat' where id_toko = '$id'";
            $Update = mysqli_query($koneksi, $query_update);
            if($Update)
                echo "<script > window.alert('Update profil berhasil');
            window.location = ('index.php?t=profil')</script>";
			else
                 echo "<p class = 'alert alert-danger' role = 'alert'> [Error] Update data gagal <br> </p>"; 
        }
            if($_FILES['gambar']['error']==0){
                
            if(copy($img['tmp_name'],"assets/img/profil/".$new_img)){
                $sft=mysqli_query($koneksi,"update toko set nohp='$no',alamat ='$alamat',gambar='$new_img' where id_toko = '$id'");
                if($sft) {
                    header("location:index.php?t=profil");
                }
            }
        }
                