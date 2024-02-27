<?php 
include "../config.php";

$sql ='SELECT * FROM distributor WHERE id_distributor='.$_GET['id_distributor'];

$hasil = $koneksi->query($sql);
$siswa = $hasil->fetch_assoc();

if(isset($_POST['alamat'])){
    $sql ="UPDATE distributor SET 
    
    nama_distributor='".$_POST['nama_distributor']."',

    alamat='".$_POST['alamat']."',

    telepon='".$_POST['telepon']."'

    where id_distributor =".$_GET['id_distributor'];

    $koneksi->query($sql);
    
    header("location:index.php");
}

?> 

<?php 

include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/menu.php";
?>

<section class="main" id="main">
    <main>
        <h2>Edit Distributor</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Distributor</label>
                <input type="text" class="form-control" name="nama_distributor" value="<?=$siswa['nama_distributor']?>">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?=$siswa['alamat']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?=$siswa['telepon']?>">
            </div>
            <input type="hidden" name="id_distributor" value="<?=$siswa['id_distributor']?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</section>

<?php 
include "../layout/footer.php";
?>
