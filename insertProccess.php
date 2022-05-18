<?php
    include "myconnection.php";

    $id_buku = $_GET["myid_buku"];
    $judul = $_GET["myjudul"];
    $pengarang = $_GET["mypengarang"];

    $query = "INSERT INTO bukuu(id_buku, judul, pengarang)
            VALUE('$id_buku', '$judul', '$pengarang')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>