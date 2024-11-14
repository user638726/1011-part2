<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI值</title>
</head>
<body>
    <h1>計算BMI</h1>
    <?php 
    if(isset($_GET['BMI'])){
        echo "你上一次量測的BMI為{$_GET['BMI']}";
    }

    ?>
    <h1>計算BMI-GET</h1>
    <form action="./action_page.php" method='GET'>
  <label for="體重">體重:</label><br>
  <input type="text" id="number" name="number" value="number">Kg<br>
  <label for="lname">身高</label><br>
  <input type="text" id="height" name="height" value="height">Cm<br><br>
  <input type="submit" value="Submit"><br><br>
  <input type="reset" value="清空/重置">
</form> 
<h1>計算BMI-POST</h1>
    <form action="./action_page.php" method='POST'>
  <label for="體重">體重:</label><br>
  <input type="text" id="number" name="number" value="number">Kg<br>
  <label for="lname">身高</label><br>
  <input type="text" id="height" name="height" value="height">Cm<br><br>
  <input type="submit" value="Submit"><br><br>
  <input type="reset" value="清空/重置">

  
</form> 
</body>
</html>