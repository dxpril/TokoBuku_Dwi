<?php  

include "../config.php";

$sql = 'SELECT * from buku';

$hasil = $koneksi->query($sql);

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
    <th scope="col">id buku</th>
    <th scope="col">judul</th>
    <th scope="col">noisbn</th>
    <th scope="col">penulis</th>
    <th scope="col">penerbit</th>
    <th scope="col">tahun</th>
    <th scope="col">stok</th>
    <th scope="col">harga pokok</th>
    <th scope="col">harga jual</th>
    <th scope="col">ppn</th>
    <th scope="col">diskon</th>
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
            <td><?=$item['id_buku']?></td>
            <td><?=$item['judul']?></td>
            <td><?=$item['noisbn']?></td>
            <td><?=$item['penulis']?></td>
            <td><?=$item['penerbit']?></td>
            <td><?=$item['tahun']?></td>
            <td><?=$item['stok']?></td>
            <td><?=$item['harga_pokok']?></td>
            <td><?=$item['harga_jual']?></td>
            <td><?=$item['ppn']?></td>
            <td><?=$item['diskon']?></td>
            <td>
              <a href="delete.php?id_buku=<?=$item['id_buku']?> "class="btn btn-danger">Delete</a>
              <a href="edit.php?id_buku=<?=$item['id_buku']?>" class="btn btn-warning">Edit</a>
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
