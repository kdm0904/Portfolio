<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php header("Content-Type: text/html; charset=UTF-8");
        session_start();    
    ?>
    <?php if((!isset($_SESSION['id']))&&(!isset($_SESSION['nickname']))) {?>
        <a href="/boardtest/join.html">회원가입</a> &nbsp;
        <a href="/boardtest/login.html">로그인</a> &nbsp;
    <?php } else {
                // $userId=$_SESSION['id'];
                // $conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
                // $sql = "select * from `member` commit where id='".addslashes($userId)."'";
                // $result = mysqli_query($conn, $sql);
                // $row=mysqli_fetch_array($result);
                include 'userData.php';
                $row = userData();    
    ?>
        <a href="/boardtest/logout.php">로그아웃</a> &nbsp;
        <b><?php echo $row['nickname']?>님 환영합니다.</b> &nbsp;
    <?php } ?> 
    <a href="/boardtest/board.php">게시판</a>   
</body>
</html>