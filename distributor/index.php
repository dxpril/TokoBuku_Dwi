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
<table class="table">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">id distributor</th>
      <th scope="col">nama distributor</th>
      <th scope="col">alamat</th>
      <th scope="col">telepon</th>
    </tr>
  </thead>
    <tbody>
        <?php 
        $nomer = 1;
        while($item = $hasil->fetch_assoc()){
        ?>
        <tr>
            <th scope="row"><?=$nomer?></th>
            <td><?=$nama_distributor?></td>
            <td><?=$alamat?></td>
            <td><?=$telepon?></td>
        </tr>
        <?php $nomer++;}?>
    </tbody>
</table>
</main>
</section>
<?php 
include "../layout/footer.php";
?>
