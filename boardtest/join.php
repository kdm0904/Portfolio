<?php
header("Content-Type: text/html; charset=UTF-8");
$conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
$id = $_POST['id'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$password_hash = hash("sha256", $password);
$sql = "insert into web.member (id, nickname, password) values ('".addslashes($id)."', '".addslashes($nickname)."', '".addslashes($password_hash)."')";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
} else{
    echo "<script>location.href='main.php';</script>";
}

?>