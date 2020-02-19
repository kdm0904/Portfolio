<style type="text/css">
.font1 a{font-size : 12 px; color : #FFF};
.font2{font-size : 12 px; color : #fff};
</style>
<?php

$totalPage=ceil($total/$page_num);

if($page%10) {
    echo "처음 : ".$startPage=$page-$page%10+1;
} else {
    echo "처음 : ".$startPage=$page-1;
}
echo "<br>";
echo "마지막".$endPage=$startPage+10;

for ($i=$startPage; $i<$endPage; $i++) {
    if($i > $totalPage) {
        break;
    }
    if($i==$page) {
        echo "(<font class='font2'>$i</font>)&nbsp";
    }
    else {
        echo "<font class='font2'>"
    }
}

?>