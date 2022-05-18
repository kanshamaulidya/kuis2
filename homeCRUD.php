<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1 align = "center">TOKO BUKU KANSHA</h1>
        <a href="loginForm.php"><button>LogIn</button></a>
        <form action="search.php" method="get">
            Cari Buku:
            <input type="text" name="cariid">
            <input type="submit" value="Cari">
        </form>
        
               <table>
            <tr>
                <th> ID </th>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang</th>
    
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM bukuu";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"]; ?> </td>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                
                <td> 
                    <a href = "detail.php?id=<?php echo $row["id"]; ?>">
                    <button>Detail</button> </a>
                </td>
            </tr>
            <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </table>
    </body>
</html>