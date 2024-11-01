<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:5px 10px;
        text-align: center;
        border:1px solid #999;
    }
    .holiday{
        background:pink;
        color:#999;
    }
    .grey-text{
        color:#999;
    }
    .today{
        background:blue;
        color:white;
        font-weight:bolder;
    }
</style>
</head>
<body>

<h1>萬年曆</h1>

<ul>
    <li>有上一個月下一個月的按鈕</li>
    <li>萬年曆都在同一個頁面同一個檔案</li>
    <li>有前年跟來年的按鈕</li>
    <li></li>
</ul>
<?php

if(isset($_GET['month'])){
    $month=(int)$_GET['month'];
}else{
    $month=date("m");
}



if(isset($_GET['year'])){
    $year=(int)$_GET['year'];
}else{
    $year=date('Y');
}
?>



<!-- <?php
$month = (int)$_GET['month'] ?? date('m');
$year = (int)$_GET['year'] ?? date('Y');
?> -->

<?php
if ($month-1 < 1) {
    $prevMonth=12;
    $preYear=$year-1; 
}

if ($month+1>12) {
    $nextMonth=1;
    $nextYear=$year+1; 
}

$prevYear=$year-1;
$nextYear=$year+1
?>


<!-- <button>上一個月</button><button>下一個月</button> -->
<a href="calender.php?year=<?=$prevYear;?>">前年</a>
<a href="calender.php?month=<?=$prevMonth;?>&year=<?=$prevYear;?>">上一個月</a>
<a href="calender.php?month=<?=$nextMonth;?>&year=<?=$nextYear;?>">下一個月</a>
<a href="calender.php?year=<?=$nextYear;?>">明年</a>

</table>
<h3><?php echo date("{$year}年 {$month}月");?></h3>
<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php




$firstDay="2024-{$month}-1";
$firstDayTime=strtotime($firstDay);
$firstDayWeek=date("w",$firstDayTime);

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        //echo "<td class='holiday'>";
        $cell=$i*7+$j -$firstDayWeek;
        $theDayTime=strtotime("$cell days".$firstDay);

        //所需樣式css判斷
        $theMonth=(date("m",$theDayTime)==date("m",$firstDayTime))?'':'grey-text';
        $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';
        $w=date("w",$theDayTime);
        $isHoliday=($w==0 || $w==6)?'holiday':'';
        
        echo "<td class='$isHoliday $theMonth $isToday'>";
        echo date("d",$theDayTime);
        echo "</td>";
        
    }
    echo "</tr>";
}



?>
</table>



</body>
</html>