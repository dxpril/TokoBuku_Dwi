<?php

include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/menu.php";
?>
<section class="main" id="main">
    <main>
    <h2>Create Pasok</h2>
<form action="simpan.php" method="post">
            <div class="mb-3">
                <label for="Alamat" class="form-label">id distributor</label>
                <input type="text" class="form-control"name="id_distributor">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">id buku</label>
                <input type="text" class="form-control"name="id_buku">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">jumlah</label>
                <input type="text" class="form-control"name="jumlah">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">tanggal</label>
                <input type="date" class="form-control"name="tanggal">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</main>
</section>