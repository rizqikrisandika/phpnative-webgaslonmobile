<?php $id_pembelian = $_GET['id'];

$db = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian'");
$pp = mysqli_fetch_assoc($db);

?>

<body>
            <div class="main-content-inner">
                <div class="row">

                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Payment</h4>

                                <br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                      <img class="image-responsive" src="../<?php echo $pp['bukti_pembayaran'] ?>" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table">
       
                                                <tr>
                                                    <th>Name</th>
                                                    <td><?php echo $pp['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Bank</th>
                                                    <td><?php echo $pp['bank'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <td><?php echo $pp['tanggal_pembayaran'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>Rp. <?php echo number_format($pp['jumlah_pembayaran']); ?></td>
                                                </tr>
                                   
                                        </table>

                                        <form action="" method="post">
                                            <button name="verif" class="btn btn-success" onclick="javascript: return confirm('Verifikasi Pembayaran a/n <?php echo $pp['nama'] ?> benar?')">Verifikasi</button>
                                            <button name="cancel" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin Cancel Pembayaran <?php echo $pp['nama'] ?>?')">Cancel</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                if(isset($_POST['verif'])){
                    mysqli_query($koneksi,"UPDATE pembelian SET status_pembelian='Sudah dibayar' WHERE id_pembelian='$id_pembelian'");
                    echo "<script>alert('Succes')</script>";
                    echo "<script>location='index.php?page=purchase'</script>";
                }

                if(isset($_POST['cancel'])){
                    mysqli_query($koneksi,"UPDATE pembelian SET status_pembelian='Di batalkan' WHERE id_pembelian='$id_pembelian'");
                    echo "<script>alert('Succes')</script>";
                    echo "<script>location='index.php?page=purchase'</script>";
                }
            ?>