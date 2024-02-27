<?php

include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/menu.php";
?>
<section class="main" id="main">
    <main>
    <h2>Create Buku</h2>
<form action="simpan.php" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">id buku</label>
                <input type="text" class="form-control"name="id_buku">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">judul</label>
                <input type="text" class="form-control"name="judul">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">noisbn</label>
                <input type="text" class="form-control"name="noisbn">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">penulis</label>
                <input type="text" class="form-control"name="penulis">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">penerbit</label>
                <input type="text" class="form-control"name="penerbit">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">tahun</label>
                <input type="text" class="form-control"name="tahun">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">stok</label>
                <input type="text" class="form-control"name="stok">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">harga pokok</label>
                <input type="text" class="form-control"name="harga pokok">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">harga jual</label>
                <input type="text" class="form-control"name="harga_jual">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">ppn</label>
                <input type="text" class="form-control"name="ppn">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">diskon</label>
                <input type="text" class="form-control"name="diskon">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</main>
</section>