<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[班級]詳細資料</title>
</head>
<body>
<h1>班級學員</h1>    

<h1>資料庫連線</h1>

<?php
// 連結資料庫
$dsn= "mysql:host=localhost;charset=utf8;dbname=school";
// 創建pdo物件來連接資料庫
$pdo=new PDO($dsn,'root','');
// 撰寫sql查詢語句
$sql="select * from classes";
/**執行查詢並取得結果  拿有關聯的東西 */
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// echo $rows[0][3];


$class_member="select school_num,seat_num form class_student where class_code='{$class['code']}';
$member=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach($members as $mem){
$student_sql="select * from students where school_num='{$mem['school_num']}'";
$student=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}


print




?>
</body>
</html>