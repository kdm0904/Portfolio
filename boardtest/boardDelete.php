<?php 
header("Content-Type: text/html; charset=UTF-8");
include 'userData.php';
$conn = dbConnection();
$bno = $_POST['bno'];
$sql = "delete from `board` where bno=$bno";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
} else{
    echo "<script>location.href='board.php';</script>";
}

?>