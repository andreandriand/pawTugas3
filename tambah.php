<?php
     require 'functions.php';

    if (isset($_POST["submit"])) {
       
        //cek keberhasilan insert data
        if ( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Tambah data berhasil dilakukan');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo  "
                <script>
                    alert('Tambah data gagal dilakukan');
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

    <h1 align="center">Tambah Data</h1>
    <br><br><br>
    <form method="POST" action="">
        <ul>
            <li>
                <label>
                    Nama Klub :
                    <input type="text" name="name" required>
                </label>
            </li>
            <li>
                <label>
                    Asal Negara :
                    <input type="text" name="country" required>
                </label>
            </li>
            <li>   
                <label>
                    Tahun Berdiri :
                    <input type="number" name="year" required>
                </label>
            </li> 
            <li>  
                <label>
                    Manager :
                    <input type="text" name="manager" required>
                </label>
            </li>
            <li>
                <label>
                    Stadion :
                    <input type="text" name="stadium" required>
                </label>
            </li>  
            <li>
                <label>
                    Gambar Logo :
                    <input type="text" name="logo" required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>