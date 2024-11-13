<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫連線</title>
    <style>
        table {
            border-collapse:collapse;
            margin:auto;
            width:400px;
        }
        table tr:nth-child(1) td{
            background-color:#cc6;
            color:darkorange;
            text-shadow: 2px 2px 2px #fff;
        }

        tr td{
            border: 1px solid black;
            text-align:center;
            padding:5px 15px;
          
        }
        h1{
             text-align:center;
        }
    </style>
</head>

<body>
<h1>資料庫連線</h1>

<?php
// 連結資料庫
$dsn= "mysql:host=localhost;charset=utf8;dbname=school";
// 創建pdo物件來連接資料庫
$pdo=new PDO($dsn,'root','');
// 撰寫sql查詢語句
$sql="select * from classes";
/**拿有關聯的東西 */
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// echo $rows[0][3];
?>

<table>
<tr>
    <td>序號</td>
    <td>班級名稱</td>
    <td>班導師</td>
</tr>    

    <?php
    // 使用foreach循環來顯示每一行資料
    foreach ($rows as $row) {
?>
        <tr>
        <td> <?= ($row['id'])?> </td>
        <td> <?= ($row['name']) ?></td>
        <td> <?= ($row['tutor']) ?></td>
        </tr>
    <?php
    }
    ?>

</table>
<!-- foreach($rows as $row){
echo $row['id']."-".$row['name']."-".$row['tutor']."<br>";
} -->

<!-- 
 echo "<pre>";
 print_r($rows);
 echo "</pre>"; -->


</body>
</html>