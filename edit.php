<?php
require 'functions.php';

$id = $_GET["id"];

$data = query("SELECT * FROM clubs_210 WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    //cek keberhasilan ubah data
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('Ubah data berhasil dilakukan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo  "
            <script>
                alert('Ubah data gagal dilakukan');
                document.location.href = 'index.php';
            </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>

    <h1 align="center">Ubah Data</h1>
    <br><br><br>
    <form method="POST" action="">
        <ul>
            <li>
                <input type="hidden" name="id" value="<?= $data["id"]; ?>">
            </li>
            <li>
                <label>
                    Nama Klub :
                    <input type="text" name="name" value="<?= $data["name"]; ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Asal Negara :
                    <input type="text" name="country" value="<?= $data["country"]; ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Tahun Berdiri :
                    <input type="number" name="year" value="<?= $data["year"]; ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Manager :
                    <input type="text" name="manager" value="<?= $data["manager"]; ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Stadion :
                    <input type="text" name="stadium" value="<?= $data["stadium"]; ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Gambar Logo :
                    <input type="text" name="logo" value="<?= $data["logo"]; ?>" required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data Ini ?')">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>