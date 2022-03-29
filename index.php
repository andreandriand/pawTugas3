<?php 
    require 'functions.php';
    $clubs = query("SELECT * FROM  clubs_210");
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>


    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            
            <th>No.</th>
            <th>Action</th>
            <th>Logo</th>
            <th>Nama Klub</th>
            <th>Negara</th>
            <th>Tahun Berdiri</th>
            <th>Manager</th>
            <th>Stadion</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($clubs as $club) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td>
                <a href="edit.php?id=<?= $club["id"]; ?>">Edit</a> |
                <a href="delete.php?id=<?= $club["id"]; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
            <td><img src="img/<?= $club["logo"]; ?>" alt="logo klub" width="50"></td>
            <td><?= $club["name"]; ?></td>
            <td><?= $club["country"]; ?></td>
            <td><?= $club["year"]; ?></td>
            <td><?= $club["manager"]; ?></td>
            <td><?= $club["stadium"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>