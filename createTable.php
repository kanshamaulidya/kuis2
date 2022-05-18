<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MYSQL berhasil<br>";
    }
    else{
        echo "Koneksi ke MYSQL gagal" . mysqli_connect_error();
    }

    $query = "CREATE TABLE bukuu(
                id INT PRIMARY KEY AUTO_INCREMENT,
                id_buku VARCHAR(10),
                judul VARCHAR(200) NOT NULL,
                pengarang VARCHAR(100) NOT NULL,
                penerbit VARCHAR(50),
                deskripsi TEXT)";


    if(mysqli_query($connect, $query)){
        echo "Table buku berhasil dibuat";
    }
    else{
        echo "Table buku gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>