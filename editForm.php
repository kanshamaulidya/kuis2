<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1 align = "center">Menu Edit</h1>
        <?php
        include "myconnection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM bukuu WHERE id=$id";
        $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php" method="get">
            <table>
                <?php 
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>ID: </td>
                    <td><input type ="text" name="myid" value="<?php echo $row['id'];?>" readonly> </td>
                </tr>
                <tr>
                    <td>Kode Buku: </td>
                    <td><input type ="text" name="myid_buku" value="<?php echo $row['id_buku'];?>"> </td>
                </tr>
                <tr>
                    <td>Judul: </td>
                    <td><input type ="text" name="myjudul" value="<?php echo $row['judul'];?>"> </td>
                </tr>
                <tr>
                    <td>Pengarang: </td>
                    <td><input type ="text" name="mypengarang" value="<?php echo $row['pengarang'];?>"> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Simpan"></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>    
    </body>
</html>