<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 읽기</title>
    <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
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
        $bno = $_GET['bno'];
        include 'userData.php';
        $conn = dbConnection();
        $sql = "select * from `board` commit where bno=$bno";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);
    ?>            
    <form role="form" method="post">
        번호 : <input type="text" id="bno" name="bno" value="<?php echo $row['bno']?>" readonly=readonly>
        제목 : <input type="text" id="title" name="title" value="<?php echo $row['title']?>" readonly=readonly>
        조회수 : <input type="text" id="viewcnt"" name="viewcnt" value="<?php echo $row['viewcnt']?>" readonly=readonly><br>
        작성자 : <input type="text" id="writer" name="writer" value="<?php echo $row['writer']?>" readonly=readonly>
        작성일 : <input type="text" id="regdate" name="regdate" value="<?php echo $row['regdate']?>" readonly=readonly><br>
        <!-- 본문 : <input type="textarea" id="contents" name="contents" value="" readonly=readonly></br> -->
        본문 : <textarea id="contents" name="contents" readonly=readonly><?php echo $row['contents']?></textarea><br>
        <button id="update_btn">수정</button>
        <button id="delete_btn">삭제</button>
    </form>    
    

    <script>

        let form = $("form[role='form']");
        
        $("#update_btn").click(function(){    
            form.attr("action", "boardUpdate.php");
            form.attr("method", "post");  
            form.submit();     
        });
        
        
        $("#delete_btn").click(function(){
            form.attr("action", "boardDelete.php");
            form.attr("method", "post");  
            form.submit();    
        });
    </script>
</body>
</html>