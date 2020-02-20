<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script>
        function pwChecking(){
		$.ajax({
			url : "<c:url value='/board/pwChecking.php' />",
			type : "get",
			dataType : "json",
			data : {"password" : $("#password").val()},
			success : function(data){
				if(data == 1){
                    $("#pwCheck").attr("value", "Y");
					alert("비밀번호가 일치합니다.");
				}else if(data == 0){
					alert("비밀번호가 틀립니다.");
				}
			}
		})
	}
    </script> -->
</head>
<body>
<?php header("Content-Type: text/html; charset=UTF-8");
        session_start();
        
    ?>
    <?php if((!isset($_SESSION['id']))&&(!isset($_SESSION['nickname']))) {?>
        <a href="/boardtest/join.html">회원가입</a> &nbsp;
        <a href="/boardtest/login.html">로그인</a> &nbsp;
    <?php } else {?>
        <a href="/boardtest/logout.php">로그아웃</a> &nbsp;
    <?php } ?> 
    <a href="/boardtest/board.php">게시판</a> <br>
    <?php 
        $bno = $_POST['bno'];
        $viewcnt = $_POST['viewcnt'];
        $title = $_POST['title'];
        $writer = $_POST['writer'];
        $regdate = $_POST['regdate'];
        $contents = $_POST['contents'];
    ?>
    <form method="get" action="/boardtest/boardUpdate_action.php">
        번호 : <input type="text" id="bno" name="bno" value="<?php echo $bno?>" readonly=readonly>
        제목 : <input type="text" id="title" name="title" value="<?php echo $title?>">
        조회수 : <input type="text" id="viewcnt" name="viewcnt" value="<?php echo $viewcnt?>" readonly=readonly><br>
        작성자 : <input type="text" id="writer" name="writer" value="<?php echo $writer?>" readonly=readonly>
        작성일 : <input type="text" id="regdate" name="regdate" value="<?php echo $regdate?>" readonly=readonly><br>
        본문 : <textarea id="contents" name="contents"><?php echo $contents?></textarea></br>
        비밀번호 확인 : <input type="password" id="password" name="password"><br>
        <input type="submit" value="수정완료"> 
    </form>    
</body>
</html>