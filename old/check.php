<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳密登入結果</title>
</head>
<body>

<div>

<?php
// session_start();


if(!isset($_POST['acc'])){
    header("location:login.php");
    exit();
 }

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if ($acc=='Emily' && $pw=='1234'){
   echo "帳密正確，登入成功";
   setcookie("login","$acc",time()+180);
   echo $_COOKIE['login'];

//    $_SESSION['login']=$acc;
   echo "<br><a href='login.php'>回首頁</a>";
}else {
    echo "帳密錯誤，登入失敗";
   
}
?>


    
</div>
</body>
</html>