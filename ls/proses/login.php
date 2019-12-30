<?php

    require "config/koneksi.php";

    if(isset($_POST['login']))
    {
        $username = $_POST['user'];
        $password = md5($_POST['pass']);

        $db = mysqli_query($koneksi,"SELECT * FROM admin WHERE username_admin='$username' AND password_admin='$password'");
        $data = mysqli_fetch_array($db);
        $check = mysqli_num_rows($db);

        if($check>0)
            {
                $_SESSION['admin'] = $data['username_admin'];
                echo "<script>alert('Login Sukses')</script>";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
            }
        else
            {
                echo "<script>alert('Password atau Username salah')</script>";
                echo "<meta http-equiv='refresh' content='1;url=index.php?admin=login-admin'>";
            }
    }
?>