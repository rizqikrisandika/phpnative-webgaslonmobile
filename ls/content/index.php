<?php 
                if(isset($_GET['admin'])){
                    $page = $_GET['admin'];
            
                    switch ($page) {
                    case 'login-admin':
                        include "layout/login.php";
                        break;
                    case 'login':
                        include "proses/login.php";
                        break;			
                    default:
                        include "layout/404.php";
                        break;
                    }
                }else{
                    include "layout/index.php";
                }
            
?>