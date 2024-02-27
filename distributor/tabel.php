<?php

include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/menu.php";
?>
<section class="main" id="main">
    <main>
    <h2>Create Distributor</h2>
<form action="simpan.php" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">nama distributor</label>
                <input type="text" class="form-control"name="nama_distributor">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">alamat</label>
                <input type="text" class="form-control"name="alamat">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">telepon</label>
                <input type="text" class="form-control"name="telepon">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</main>
</section>