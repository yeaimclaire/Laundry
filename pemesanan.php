<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
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
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #D3DEDC;">
    <h1 class= "text-center text-white">Pemesanan</h1>
        <form action="pelanggan.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn text-white" style="background-color: #92A9BD;" type="submit">Search</button>
        </form>
            </div>
            <div class="card-body">
        <table class="table table-striped text-white" style="background-color: #7C99AC;">
        <thead>
                                <tr class="table-top text-white">
                                    <th>No</th>
                                    <th>Nama Member</th>
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>Batas Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include "koneksi.php"; 
                                    $qry_laundry=mysqli_query($conn,"select * from transaksi");
                                    $no=0;
                                    while($data_laundry=mysqli_fetch_array($qry_laundry)){
                                    $qry_member=mysqli_query($conn,"select * from member where id=('".$data_laundry['id_member']."')");
                                    $data_member=mysqli_fetch_array($qry_member);
                                    $no++;
                                ?>
                                <tr>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$data_member['nama']?></td>
                                    <td><?=$data_laundry['status']?></td>
                                    <td><?=$data_laundry['dibayar']?></td>
                                    <td><?=$data_laundry['batas_waktu']?></td>
                                    <td class="align-middle">
                                        <a href="edit_laundry.php?id=<?=$data_laundry['id']?>" class="btn btn-success"><i class="fas fa-edit pe-2"></i>EDIT</a> | 
                                        <a href="../model/delate_laundry.php?id=<?=$data_laundry['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt pe-2"></i>Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
</table>
    <td><a href="tambah_pemesanan.php" class="btn text-white" style="background-color: #92A9BD;">Tambah Pemesanan</a></td>
    <td><a href="checkout.php" class="btn text-white" style="background-color: #92A9BD;">Proses</a></td>
    </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>