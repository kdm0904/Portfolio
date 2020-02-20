<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 리스트</title>
</head>
<body>
    <article>
    <?php
    include 'userData.php';
    $conn = dbConnection();
    //페이징 시작
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {

        $page = 1;
    }
    $sql = "select * from `board` commit order by bno desc";
    $result = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($result);

    $pageList = 10;
    $allPage = ceil($total/$pageList);

    if($page < 1 || (($allPage && $page) > $allPage)) {
    ?>    
    <script>
		alert("존재하지 않는 페이지입니다.");
		history.back();
	</script>

    <?php
        exit;
        }
        $block = 10;
        $currentSection = ceil($page/$block);
        $allSection = ceil($allPage/$block);

        $firstPage = ($currentSection*$block) - ($block-1);

        if($currentSection == $allSection) {
            $lastPage = $allPage;
        } else {
            $lastPage = $currentSection*$block;
        }

        $prevPage = (($currentSection-1)*$block);
        $nextPage = (($currentSection+1)*$block)-($block-1);

        $paging = '<p>'; 
        

        //이전 페이지 버튼
        if($currentSection != 1) { 
            $paging .= '<a href="/boardtest/board.php?page=' . $prevPage . '">이전</a> &nbsp; &nbsp;';
        }
        
        //페이지 번호
        for($i = $firstPage; $i <= $lastPage; $i++) {
            if($i == $page) {
                $paging .= $i;
            } else {
                $paging .= '<a href="/boardtest/board.php?page=' . $i . '">' . $i . '</a> &nbsp;';
            }
        }
        
        //다음 페이지 버튼
        if($currentSection != $allSection) { 
            $paging .= '&nbsp; &nbsp;<a href="/boardtest/board.php?page=' . $nextPage . '">다음</a>';
        }

        //처음&마지막 페이지 가기
        if($page != 1) { 
            $paging .= '<br><a href="board.php?page=1">처음 페이지 가기</a>';
        }
        if($page != $allPage) { 
            $paging .= '<br><a href="/boardtest//board.php?page=' . $allPage . '">마지막 페이지 가기</a>';
        }
        $paging .= '</p>';
        //페이징 끝
        $currentLimit = ($pageList * $page) - $pageList; 
        $sqlLimit = ' limit ' . $currentLimit . ', ' . $pageList; 

        $sql = 'select * from `board` order by bno desc' . $sqlLimit; 
        $result = mysqli_query($conn, $sql);
    ?>
        <?php header("Content-Type: text/html; charset=UTF-8");
            session_start();
        ?>
        <?php if((!isset($_SESSION['id']))&&(!isset($_SESSION['nickname']))) {?>
            <a href="join.html">회원가입</a> &nbsp;
            <a href="login.html">로그인</a> &nbsp;
        <?php } else {?>
            <a href="logout.php">로그아웃</a> &nbsp;
        <?php } ?> 
        <a href="board.php">게시판</a> <br>
        <h3 style="text-align : center;">게시판</h3>
        <table style = "margin : auto; text-align : center;">
            <thead>
                <tr>
                    <th>번호</th><th>제목</th><th>작성자</th><th>작성일</th><th>조회수</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
        <div style = "margin : auto; text-align : center;">
            <button onclick="location.href='boardWrite.php'">게시글 작성</button> 
        </div>
        <div style = "margin : auto; text-align : center;">
            <?php echo $paging ?>
        </div>
    </article>
</body>
</html>