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
        <a href="join.html">회원가입</a><br>
        <a href="login.html">로그인</a><br>
    <?php } else {?>
        <a href="logout.php">로그아웃</a><br>
    <?php } ?> 
    <a href="board.php">게시판</a> <br>
    <?php 
        $bno = $_POST['bno'];
        $viewcnt = $_POST['viewcnt'];
        $title = $_POST['title'];
        $writer = $_POST['writer'];
        $regdate = $_POST['regdate'];
        $contents = $_POST['contents'];
    ?>
    <form method="post" action="boardUpdate_action.php">
        번호 : <input type="text" id="bno" name="bno" value="<?php echo $bno?>" readonly=readonly>
        제목 : <input type="text" id="title" name="title" value="<?php echo $title?>">
        조회수 : <input type="text" id="viewcnt"" name="viewcnt" value="<?php echo $viewcnt?>" readonly=readonly><br>
        작성자 : <input type="text" id="writer" name="writer" value="<?php echo $writer?>" readonly=readonly>
        작성일 : <input type="text" id="regdate" name="regdate" value="<?php echo $regdate?>" readonly=readonly><br>
        본문 : <input type="textarea" id="contents" name="contents" value="<?php echo $contents?>"></br>
        <input type="submit" value="수정완료"> 
    </form>    
</body>
</html>