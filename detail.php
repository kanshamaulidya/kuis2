<!DOCTYPE html>
<html>
<head>
    <title>Detail</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <h1 align = "center">Detail Buku</h1>
        <table>
            <?php
                include "myconnection.php";

                $id = $_GET["id"];
                $query = "SELECT * FROM bukuu WHERE id='$id'";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> Kode Buku </td>
                <td> <?php echo $row["id_buku"]; ?> </td>
            </tr>
            <tr>
                <td> Judul </td>
                <td> <?php echo $row["judul"]; ?> </td>
            </tr>
            <tr>
                <td> Pengarang</td>
                <td> <?php echo $row["pengarang"]; ?> </td>
            </tr>
            <tr>
                <td> Penerbit </td>
                <td> <?php echo $row["penerbit"]; ?> </td>
            </tr>
            <tr>
                <td> Deskripsi </td>
                <td> <?php echo $row["deskripsi"]; ?> </td>
            </tr>
        </table>
        <?php
                }
        ?>
        <a href="homeCRUD.php"> <button>Kembali ke Home</button></a> 
    </div>
</body>
</html>