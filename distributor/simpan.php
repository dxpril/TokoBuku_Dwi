<?php 
include "config.php";

$sql = "INSERT INTO distributor(id_distributor,nama_distributor,alamat,telepon) values('".$_POST['id_distributor']."','".$_POST['nama_distributor']."','".$_POST['alamat']."','".$_POST['telepon']."')";
$koneksi->query($sql);
?>