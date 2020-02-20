<?php 
header("Content-Type: text/html; charset=UTF-8");
session_start();  
include 'userData.php';
$conn = dbConnection();
$user = userData();

$bno = $_GET['bno'];
$title = $_GET['title'];
$contents = $_GET['contents'];
$password = $_GET['password'];
$rightPw = $user['password'];

$sql = "update `board` set title='".addslashes($title)."', contents='".addslashes($contents)."' where bno=$bno";
$result = mysqli_query($conn, $sql);

if($user['password'] != $password) {
    $result === false;
    echo "<script>alert('비밀번호가 틀립니다. 다시 확인해주세요! $rightPw');</script>";
}
if($result === false){
    echo mysqli_error($conn);
} else{
    echo "<script>location.href='/boardtest/board.php';</script>";
}

?>
    
             