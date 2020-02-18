<?php 
header("Content-Type: text/html; charset=UTF-8");
$conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
$title = $_POST['title'];
$writer = $_POST['writer'];
$contents = $_POST['contents'];
$sql = "insert into web.board (title, contents, writer) values ('".$title."', '".$contents."', '".$writer."')";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
} else{
    echo "<script>location.href='board.php';</script>";
}

?>
