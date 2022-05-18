<?php 
    include "myconnection.php";

    $id = $_GET["id"];

    $query = "DELETE FROM bukuu WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD2.php');
    }
    else{
        echo "Data gagal dihapus <br>";
        mysqli_error($connect);
    }
    mysqli_close();
?>