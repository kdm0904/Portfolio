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
    <table>
        <thead>
            <tr>
                <th>번호</th><th>제목</th><th>작성자</th><th>작성일</th><th>조회수</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $conn = mysqli_connect("localhost", "root", "wpdbs1234", "web", 3307);
                $sql = "select * from board";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
            ?>
            <tr>

                <td id="bno"><?php echo $row['bno']?></td>

                <td id="title"><?php echo $row['title']?></td>

                <td id="writer"><?php echo $row['writer']?></td>

                <td id="regdate"><?php echo $row['regdate']?></td>

                <td id="viewcnt"><?php echo $row['viewcnt']?></td>

            </tr>
        </tbody>
    </table>
    <button onclick="location.href='boardwrite.php'">게시글 작성</button>    
</body>
</html>