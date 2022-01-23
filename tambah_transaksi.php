<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
        include "navbar.php";
        $id_member=$_GET['id'];
    ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Add Member</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
          <form action="tambah_transaksi.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_member" value="<?=$id_member?>">
              <div class="mb-3">
                  <label class="form-label">Jenis Laundry</label>
                  <select name="jenis" class="form-control">
                  <?php 
                    include "koneksi.php";
                    $qry_laundry=mysqli_query($koneksi,"select * from paket");
                    $no=0;
                    while($detail_laundry=mysqli_fetch_array($qry_laundry)){
                    $no++;
                  ?>
                      <option value="<?=$detail_laundry['id_paket']?>"><?=$detail_laundry['jenis']?></option>
                      <?php } ?>
                  </select>
              </div>
              <div class="mb-3">
                  <label class="form-label">Jumlah</label>
                  <input type="text" class="form-control" name="qty">
              </div>
              <div class="mb-3">
                  <label class="form-label">Tanggal</label>
                  <input type="date" name="tgl" class="form-control">
              </div>
              <div class="mb-3">
                  <label class="form-label">Batas Waktu</label>
                  <input type="date" name="batas_waktu" class="form-control">
              </div>
              
              <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>