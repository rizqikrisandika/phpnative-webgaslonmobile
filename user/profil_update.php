<?php
      require "config/koneksi.php";
		$id = $_POST['id'];
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = $_FILES['gambar']['type'];
        $nama_file = $_FILES['gambar']['name'];
        $password = md5($_POST['password']);
        $no = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $nama_foto = $nama_file;
        //update
        if(empty($lokasi_file)){
            $query_update = "Update pelanggan set password ='$password', nohp ='$no', alamat ='$alamat' where id_pelanggan = '$id'";
            $Update = mysqli_query($koneksi, $query_update);
            if($Update)
                echo "<script > window.alert('Update profil berhasil');
            window.location = ('index.php?p=profil')</script>";
			else
                 echo "<p class = 'alert alert-danger' role = 'alert'> [Error] Update data gagal <br> </p>"; 
        }else{
            if ($tipe_file !="image/jpeg" and $tipe_file !="image/png" ) {
                echo "<script > window.alert('upload gagal,pastikan file yang diupload bertipe *.jpg *.pjepg *.png');
            window.location = ('index.php?p=profil')</script>";
            }else { 
                $sql=mysqli_query($koneksi,"Update pelanggan set password ='$password', alamat ='$alamat', nohp ='$no', gambar='$nama_foto' where id_pelanggan = '$id'");
                move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/img/profil/".$_FILES['gambar']['name'] );
                if($sql) {
                    header("location:index.php?p=profil");
                }
        }
    }