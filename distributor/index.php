<?php  

include "../config.php";

$sql = 'SELECT * from distributor';

$hasil = $koneksi->query($sql);

?>

<?php    

include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/menu.php";

?>

<section class="main" id="main">
    <main>
      <a href="tabel.php" class="btn btn-primary mb-2">Create penjualan</a>
<table class="table">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">nama distributor</th>
      <th scope="col">alamat</th>
      <th scope="col">telepon</th>
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
            <td><?=$item['nama_distributor']?></td>
            <td><?=$item['alamat']?></td>
            <td><?=$item['telepon']?></td>
            <td>
              <a href="delete.php?id_distributor=<?=$item['id_distributor']?> "class="btn btn-danger">Delete</a>
              <a href="edit.php?id_distributor=<?=$item['id_distributor']?>" class="btn btn-warning">Edit</a>
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
