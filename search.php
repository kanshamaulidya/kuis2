<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1 align = "center">Hasil Pencarian Data Buku</h1>
        <table>
            <tr>
                <th> ID</th>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang</th>
                
            </tr>
            <?php 
                $idbuku = $_GET["cariid"];
                include "myconnection.php";

                $query = "SELECT * FROM bukuu WHERE id_buku LIKE '%$idbuku%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
        <a href="homeCRUD.php">Kembali ke Home</a>
    </body>
</html>