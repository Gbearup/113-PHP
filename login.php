<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
    body{
      background-color: lightblue;
      text-align: center;
      
    }

    table{
      margin: 300px 300px;
      border collapse:collapse;
      background-color:white;
      border-radius: 30px; /* 圓角邊框 */ 
    }
    td{
      padding:20px;
   }

   div {
      margin: 20px;

   }
    </style>
</head>
<body>


<?php
session_start();
if(!isset($_COOIKE['login'])){
?>

<table>
<tr>
<td>
<p>登入系統</p>

<form action="check.php" method="post">
    <div>
       <label for="acc"></label>
       <input type="text" name="acc" placeholder="請輸入帳號" id="acc" >
    </div>
    <div>
       <label for="password"></label>
       <input type="password" name="pw" placeholder="請輸入密碼" id="password" >
    </div>
    <div>
       <input type ="submit" value="登入">
       <input type ="reset" value="清空/重置">
    </div>

</form>
</td>
</tr>
</table>

<?php

} else {
?>

<div>你已登入</div> 

<div>
    <a href="logout.php">登出</a> | <a href="login.php">返回登入畫面</a>
</div>
   
<?php
   }
?>
    
</body>
</html>