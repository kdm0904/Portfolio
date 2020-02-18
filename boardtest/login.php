<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
$id = $_POST['id'];
$password = $_POST['password'];
$password_hash = hash("sha256", $password);
$sql = "select*from web.member where id='".$id."'and password='".$password_hash."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($result -> num_rows>0){
    $_SESSION['id'] = $id;
    $_SESSION['nickname'] = $row["nickname"];
    //로그인 세션 확인
    if(isset($_SESSION['id'])&& isset($_SESSION['nickname'])){
        echo "<script>location.href='main.php';</script>";
    } else{
        echo "<script>alert('아이디와 비밀번호를 다시 확인해주세요!')</script>";
    }
} else{
    echo "<script>alert('아이디와 비밀번호를 다시 확인해주세요!')</script>";
} 

?>