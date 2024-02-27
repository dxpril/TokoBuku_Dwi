<?php  

include "../config.php";

$sql ='SELECT * FROM pasok WHERE id_pasok='.$_GET['id_pasok'];

$hasil = $koneksi->query($sql);
$siswa = $hasil->fetch_assoc();
?>

<?php    

include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/menu.php";

?>

<section class="main" id="main">
    <main>
      <a href="tabel.php" class="btn btn-primary mb-2">Create Pasok</a>
<table class="table">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">id pasok</th>
      <th scope="col">id distributor</th>
      <th scope="col">id buku</th>
      <th scope="col">jumlah</th>
      <th scope="col">tanggal</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
        <?php 
        $nomer = 1;
        while($item = $hasil->fetch_assoc()){
        ?>
        <tr>
            <th scope="row"><?=$nomer?></th>
            <td><?=$item['id_pasok']?></td>
            <td><?=$item['id_distributor']?></td>
            <td><?=$item['id_buku']?></td>
            <td><?=$item['jumlah']?></td>
            <td><?=$item['tanggal']?></td>
            <td>
              <a href="delete.php?id_pasok=<?=$item['id_pasok']?> "class="btn btn-danger">Delete</a>
              <a href="edit.php?id_pasok=<?=$item['id_pasok']?>" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        <?php $nomer++;}?>
    </tbody>
</table>
</main>
</section>
<?php 
include "../layout/footer.php";
?>
