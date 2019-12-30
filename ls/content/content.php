<?php 
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
            
                    switch ($page) {
                        case 'dashboard1':
                            include "layout/index1.php";
                            break;
                        case 'dashboard2':
                            include "layout/index2.php";
                            break;
                        case 'dashboard3':
                            include "layout/index3.php";
                            break;
                        case 'logout':
                            include "proses/logout.php";
                            break;
                        case 'barchart':
                            include "layout/barchart.php";
                            break;		
                        case 'linechart':
                            include "layout/linechart.php";
                            break;
                        case 'piechart':
                            include "layout/piechart.php";
                            break;
                        case 'admin':
                            include "layout/admin.php";
                            break;	
                        case 'form-admin':
                            include "layout/addadmin.php";
                            break;	
                        case 'add-admin':
                            include "proses/addadmin.php";
                            break;
                        case 'delete-admin':
                            include "proses/deleteadmin.php";
                            break;
                        case 'user':
                            include "layout/user.php";
                            break;
                        case 'productadmin':
                            include "layout/productadmin.php";
                            break;
                         case 'productuser':
                            include "layout/productuser.php";
                            break;
                        case 'form-product':
                            include "layout/addproduct.php";
                            break;	
                        case 'add-product':
                            include "proses/addproduct.php";
                            break;
                        case 'form-edit-product':
                            include "layout/editproduct.php";
                            break;
                        case 'edit-product':
                            include "proses/editproduct.php";
                            break;
                        case 'delete-product':
                            include "proses/deleteproduct.php";
                            break;
                        case 'category':
                            include "layout/category.php";
                            break;
                        case 'purchase':
                            include "layout/purchase.php";
                            break;	
                        case 'detailpurchase':
                            include "layout/detailpurchase.php";
                            break;
                        case 'purchase-payment':
                            include "layout/purchasepayment.php";
                            break;					
                        default:
                            include "layout/404.php";
                            break;
                    }
                }else{
                    include "layout/index1.php";
                }
            
?>