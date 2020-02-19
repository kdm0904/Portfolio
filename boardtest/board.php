<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 리스트</title>
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
    <table>
        <thead>
            <tr>
                <th>번호</th><th>제목</th><th>작성자</th><th>작성일</th><th>조회수</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'userData.php';
                $conn = dbConnection();
                $sql = "select * from `board` commit order by bno desc";
                $result = mysqli_query($conn, $sql);
                $total = mysqli_num_rows($result);
                echo $total;

                $page_num = 10;
                $page=1;
                if(!$page)$page=1;
                $start=($page-1)*$page_num;
                $sql = "select * from `board` commit order by bno desc limit $start, $page_num";
                $result = mysqli_query($conn, $sql);
               
                while($rows=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td id="bno" name="bno"><?php echo $rows['bno']?></td>
                <td id="title" name="title"><a href="read.php?bno=<?php echo $rows['bno']?>"><?php echo $rows['title']?></a></td>
                <td id="writer" name="writer"><?php echo $rows['writer']?></td>
                <td id="regdate" name="regdate"><?php echo $rows['regdate']?></td>
                <td id="viewcnt" name="viewcnt"><?php echo $rows['viewcnt']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php include "page.php";  ?>
    <button onclick="location.href='boardWrite.php'">게시글 작성</button>    
</body>
</html>