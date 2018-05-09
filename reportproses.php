<?php
    $connect = mysqli_connect("85.10.205.173:3306", "itb_beraksi_db", "itb_beraksi_db", "itb_beraksi_db");
    $userid = $_GET["userid"];
    $type = $_GET["type"];
    $detail = $_GET["detail"];
    $query = "INSERT INTO report (userid, type, detail) VALUES ('$userid', '$type', '$detail');";
    mysqli_query($connect, $query);
    header("Location: profile.php?userid=$userid");
?>