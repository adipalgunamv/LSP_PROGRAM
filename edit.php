<?php
include 'app/database/database.php';

use App\Database\database;

$db = new database();
$data = $db->tampil_edit($_GET["id"]);
?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Kolom Add</title>
</head>

<body>
    <br>
    <h1 text align="center">FORM UNTUK MENGEDIT ANGGOTA</h1>
    <!-- menampilkan tulisan FORM UNTUK MENAMBAHKAN DATA ANGGOTA BARU  -->
    <br>
    <div class="container">
        <!-- Meembuat Tabel Form Berada di tengah  -->
        <form action="proses.php?aksi=update&id=<?php echo $data['id'] ?>" method="post">
            <!-- Menguhungkan File add.php dan proses.php -->
            <div class="form-group">
                <!-- Memunculkan Tabel Form Nama  -->
                <label for="nama1">Nama</label>
                <input type="text" class="form-control" id="nama1" name="nama" placeholder="Enter Name" value="<?= $data["nama"] ?>">
                <small class="form-text text-muted">Silahkan Input Nama Anda</small>
            </div>
            <!-- Memunculkan Tabel Form No Handphone  -->
            <div class="form-group">
                <label for="Kontakhp1">No Handphone</label>
                <input type="number" class="form-control" id="nomor1" name="nomor" placeholder="Enter Contac Handhphone" value="<?= $data["nomor"] ?>">
                <small class="form-text text-muted">Silahkan Input Info Kontak Handhphone Anda </small>
            </div>
            <!-- Memunculkan Tabel Form Alamat  -->
            <div class="form-group">
                <label for="alamat1">Alamat</label>
                <input type="text" class="form-control" id="alamat1" name="alamat" placeholder="Enter Address" value="<?= $data["alamat"] ?>">
                <small class="form-text text-muted">Silahkan Input Info Alamat Anda </small>
            </div>
            <!-- Memunculkan Tabel Form Email  -->
            <div class="form-group">
                <label for="email1">Email</label>
                <input type="text" class="form-control" id="email1" name="email" placeholder="Enter Email" value="<?= $data["email"] ?>">
                <small class=" form-text text-muted">Silahkan Input Email Anda </small>
            </div>

            <!-- Memunculkan Button Submit  -->
            <button type="submit" value="Simpan" class="btn btn-primary">Simpan Perubahan</button>

        </form>
    </div>
</body>

</html>