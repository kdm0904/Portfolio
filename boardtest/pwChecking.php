<?php
    include 'userdata.php';
    header("Content-Type: text/html; charset=UTF-8");
    session_start();

    $conn = dbConnection();
    $user = userdata();

    $password = $_GET['password'];
    if ($password != $user['password']) {
        echo "<script>alert('비밀번호가 일치하지 않습니다.'); location.href='boardUpdate.php';</script>";
    } else {
        echo "<script>alert('비밀번호가 일치합니다.'); location.href='boardUpdate.php';</script>";
    }

?>