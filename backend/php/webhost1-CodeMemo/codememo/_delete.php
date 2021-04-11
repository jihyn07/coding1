<?php
    require ('_conn.php');
    $no = $_GET['no'];
    $sqldelete = "DELETE FROM `codememo` WHERE `codememo`.`no` = $no";
    $result = mysqli_query($conn, $sqldelete);
    if ($result) {
        echo "<script>location.href='index.php';</script>";
    }
?>
