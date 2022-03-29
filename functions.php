<?php 
    //Menghubungkan ke database
    $conn = mysqli_connect("localhost", "root", "", "andre");

    //Mengambil data dari database
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $datas = [];
        while ($data = mysqli_fetch_assoc($result)) {
            $datas[] = $data;
        }
        return $datas;
    }

    function tambah($data){
        global $conn;

        $name = htmlspecialchars($data["name"]);
        $country = htmlspecialchars($data["country"]);
        $year = htmlspecialchars($data["year"]);
        $manager = htmlspecialchars($data["manager"]);
        $stadium = htmlspecialchars($data["stadium"]);
        $logo = htmlspecialchars($data["logo"]);

         //query insert data
         $query = "INSERT INTO clubs_210 VALUES('', '$name', '$country','$year', '$manager', '$stadium', '$logo')";

         return(mysqli_query($conn, $query));
    }

    function edit($data){
        global $conn;
        $id = $data["id"];
        $name = htmlspecialchars($data["name"]);
        $country = htmlspecialchars($data["country"]);
        $year = htmlspecialchars($data["year"]);
        $manager = htmlspecialchars($data["manager"]);
        $stadium = htmlspecialchars($data["stadium"]);
        $logo = htmlspecialchars($data["logo"]);

         //query update data
         $query = "UPDATE clubs_210 SET
                    name = '$name',
                    country = '$country',
                    year = '$year',
                    manager = '$manager',
                    stadium = '$stadium',
                    logo = '$logo'
                    WHERE id = '$id'
                    ";

         return(mysqli_query($conn, $query));
    }

    function hapus($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM clubs_210 WHERE id = $id");
        
        return(mysqli_affected_rows($conn));
    }

?>