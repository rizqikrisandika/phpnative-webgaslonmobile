<?php
    
    if(isset($_POST['save']))
    {
        $username = $_POST['user'];
        $name = $_POST['name'];
        $pass = md5($_POST['password']);
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        if($password != $repassword){
            echo "<script>alert('password no match')</script>";
            echo "<script>location='index.php?page=form-admin'</script>";
        }else{
            mysqli_query($koneksi,"INSERT INTO admin(username_admin,password_admin,nama_admin)
            VALUES('$username','$pass','$name')");
            echo "<script>alert('Add Admin Succes')</script>";
            echo "<script>location='index.php?page=admin'</script>";
        }
    }
?>