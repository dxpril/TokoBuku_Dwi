<?php
include "../config.php";

    $judul = $_POST['judul'];
    $noisbn = $_POST['noisbn'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];
    $harga_pokok = $_POST['harga_pokok'];
    $harga_jual = $_POST['harga_jual'];
    $ppn = $_POST['ppn'];
    $diskon = $_POST['diskon'];

    $sql = "INSERT INTO buku (judul,noisbn,penulis,penerbit,tahun,stok,harga_pokok,harga_jual,ppn,diskon) 
            VALUES ('$judul', '$noisbn', '$penulis', '$penerbit', '$tahun', '$stok', '$harga_pokok', '$harga_jual', '$ppn', '$diskon')";

    $koneksi->query($sql);

header('Location: index.php')
?>
