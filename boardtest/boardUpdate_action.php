<?php 
header("Content-Type: text/html; charset=UTF-8");
include 'userData.php';
$conn = dbConnection();
$bno = $_POST['bno'];
$title = $_POST['title'];
$contents = $_POST['contents'];
$sql = "update `board` set title='".addslashes($title)."', contents='".addslashes($contents)."' where bno=$bno";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
} else{
    echo "<script>location.href='board.php';</script>";
}

?>
    
             