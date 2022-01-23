<?php
    if($_POST){
        $id_paket = $_POST['id'];
        $qty = $_POST['qty'];
        $status = "baru";
        $dibayar = "belum dibayar";
        $tgl = $_POST['tgl'];
        $batas_waktu = $_POST['batas_waktu'];
        $id_member = $_POST['id_member'];

        include "koneksi.php";
        $insert_detilTransaksi=mysqli_query($koneksi,"insert into detail_transaksi (id_paket, qty) value ('".$id_paket."','".$qty."')") or die(mysqli_error($koneksi));
        $insert_transaksi=mysqli_query($koneksi,"insert into transaksi (status, dibayar, tgl, batas_waktu, id_member) value ('".$status."','".$dibayar."','".$tgl."','".$batas_waktu."','".$id_member."')") or die(mysqli_error($koneksi));
        if($insert_detilTransaksi){
            echo "<script>alert('Sukses menambahkan laundry');location.href='pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan laundry');location.href='pelanggan.php';</script>";
        }
    }
?>