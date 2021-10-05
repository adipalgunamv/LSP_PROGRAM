<?php
include 'app/database/database.php';

use App\Database\database;

$db = new database();
?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <!-- menampilkan tulisan data anggota -->
    <div text align="center">
        <h1>DATA ANGGOTA</h1>
    </div>

    <div class="container">
        <!-- Membuat Tabel -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomer</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($db->tampil_data() as $data) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['nomor']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td width="120">
                            <a href="edit.php?id=<?= $data["id"] ?>" class="btn btn-primary">
                                <div class="fa fa-pencil"></div>
                            </a>
                            <a href="proses.php?aksi=hapus&id=<?php echo $data['id'] ?>" class="btn btn-warning"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>

    </div>
    </tbody>
    </table>
    <div text align="center">
        <br>
        <a href="add.php" class="btn btn-warning">Add Data</a>
    </div>

    <div text align="center">
        <br>
        <a href="export.php" class="btn btn-danger">IMPORTANT!</a>
    </div>

</body>

</html>