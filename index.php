<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
    <h1>計算BMI</h1>
    <form action="result.php" method="post">
    <div>
       <label for="height">身高:</label>
       <input typr="number" name="height" id="height">/cm
    </div>
    <div>
       <label for="weight">體重:</label>
       <input typr="number" name="weight" id="weight">/kg
    </div>
    <div>
       <input type ="submit" value="計算">
       <input type ="reset" value="清空/重置">
    </div>


</form>

</body>
</html>