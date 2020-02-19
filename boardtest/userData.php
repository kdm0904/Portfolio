<?php

function dbConnection() {
    $conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
    return $conn;
}
function userData() {
    $userId=$_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
    $sql = "select * from `member` commit where id='".addslashes($userId)."'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    return $row;
}
?>