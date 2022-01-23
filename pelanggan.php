<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    include "navbar.php";
    ?>
    <br><br>
    <section class="home-section">
                <div class="text">Member Detail</div>
                <div class="col-11 py-3 justify-content-end text-end">
                    <a href="add_member.php"><div class="btn btn-primary">
                        <div class="d-inline-flex align-items-center">
                            <i class="fas fa-cart-plus"></i>
                            <div class="ps-2">
                                Tambah
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="home-content table">
                    <div class="col-11 position-relative start-50 translate-middle-x">
                        <table class="table table-hover table-striped table-bordered striped text-center">
                            <thead>
                                <tr class="table-top text-white">
                                    <th>No</th>
                                    <th>Nama Member</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include "koneksi.php"; 
                                    $qry_product=mysqli_query($koneksi,"select * from member");
                                    $no=0;
                                    while($data_product=mysqli_fetch_array($qry_product)){
                                    $no++;
                                ?>
                                <tr>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$data_product['nama']?></td>
                                    <td><?=$data_product['alamat']?></td>
                                    <td><?=$data_product['jenis_kelamin']?></td>
                                    <td class="align-middle">
                                        <a href="tambah_transaksi.php?id=<?=$data_product['id_member']?>" class="btn btn-success"><i class="fas fa-edit pe-2"></i>AKSI</a> | 
                                        <a href="hapus_pelanggan.php?id=<?=$data_product['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt pe-2"></i>Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>