<?php
    require "../includes/database-connection.php";

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
        $sql = "DELETE FROM tacgia WHERE ma_tgia = $id";
        $qr = mysqli_query($conn,$sql);
        header("location: category.php");
?>