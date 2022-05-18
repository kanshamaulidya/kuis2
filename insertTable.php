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

    $query = "INSERT into bukuu (id_buku, judul, pengarang)
                VALUES ('TI0000121', 'Buku Ajar Konsep Dasar Pemrograman Website Dengan PHP', 'Elglamar'),
                ('TI0000122', 'Aplikasi Website Profesional dengan PHP dan jQuery', 'Wardana S.Hut'),
                ('TI0000123', 'Pemrograman Web dengan PHP dan MySQL', 'Achmad Solichin'),
                ('TI0000124', 'Ses : Pemrograman Web Database PHP', 'Arief Ramadahan')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil dibuat";
    }
    else{
        echo "Data baru gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>