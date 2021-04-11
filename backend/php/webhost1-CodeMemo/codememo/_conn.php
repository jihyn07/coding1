<?php
    // DB 연동
    // id16321826_codememo
    // id16321826_codememouser
    // 호스트명, 유저, 비번, db명, 포트
    $conn = new mysqli("localhost", "id16321826_codememouser", "Awd!32213213", "id16321826_codememo", "3306");
    mysqli_query($conn, "set names utf8");
?>