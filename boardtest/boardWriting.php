<?php 
header("Content-Type: text/html; charset=UTF-8");
include 'userData.php';
$conn = dbConnection();
$title = $_POST['title'];
$writer = $_POST['writer'];
$contents = $_POST['contents'];
$sql = "insert into `board` (title, contents, writer) values ('".addslashes($title)."', '".addslashes($contents)."', '".addslashes($writer)."')";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
} else{
    echo "<script>location.href='/boardtest/board.php';</script>";
}

?>
