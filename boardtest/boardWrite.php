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
    <?php include 'userData.php';
                $row = userData(); ?>
    <form method="post" action="boardWriting.php">
        <label>제목</label>
        <input type="text" id="title" name="title">
        <label>작성자</label>
        <input type="text" id="writer" name="writer" value="<?php echo $row['nickname'] ?>" readonly="readonly"><br>
        <label>글 내용</label>
        <textarea id="contents" name="contents"></textarea>
        <!--
        <div style="border:1px solid; height:400px; overflow:auto;" id="contents" contentEditable="true"></div>
        -->
        <input type="submit" style="border:1px solid;" value="게시물 등록">
    </form>

    
</body>
</html>