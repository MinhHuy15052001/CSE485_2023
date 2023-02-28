<?php
    require "../includes/database-connection.php";

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
        $sql = "DELETE FROM baiviet WHERE ma_bviet = $id";
        $qr = mysqli_query($conn,$sql);
        header("location: category.php");
?>