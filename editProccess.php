<?php
    include "myconnection.php";

    $id = $_GET["myid"];
    $id_buku = $_GET["myid_buku"];
    $judul = $_GET["myjudul"];
    $pengarang = $_GET["mypengarang"];

    $query = "UPDATE bukuu SET id_buku='$id_buku', judul='$judul', pengarang='$pengarang' WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD2.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>