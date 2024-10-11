<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程控制</title>
</head>
<body>
    <h1>流程-if-else<h1>
        <?php 
           $price=75;
           if($price>=75){
            echo "及格";
        }
           else{
             echo "不及格";
        }
        ?>

    <h1>流程-switch-case<h1>
        <?php
           $level="B";

           switch($level){
             case "A":
                echo "表現優良，請繼續保持";
                break;
             case "B":
                echo "值得肯定，還有進步空間";
                break;
             case "C":
                echo "需要更多的練習";
                break;
            case "D":
                echo "需要加強基本功";
                break;
            case "E":
                echo "是否無心學業";
                break;
           }
        ?>
<?php 
$score=55;

echo"<br>";  
echo ($score>=60)?"及格":"不及格";
echo "<br>";
?>

<?php
 /*for($i=0;$i<10;$i++){
 
 echo (2*$i+1);
 echo '<br/>';
 
}*/
?>

<?php
for($i=1;$i<=9;$i++){
    
    for($j=1;$j<=9;$j++){
      
      echo "$i x $j=" . ($i * $j) . "\t";;
      
      
    }
    echo "\n";
}
?>
<br>
<?php
  $b=['姓名'=>"劉勤永",'數學'=>90,'國文'=>80,'英文'=>20];
  $keys = array_keys($b);

  for($i = 0; $i < count($keys); $i++)
  {
    $key = $keys[$i];
    $value = $b[$key];
    echo $key . ':' .$value .'<br>';
  }
  foreach ($b as $value){
    echo $value.'<br>';
  }
  foreach($b as $key => $value){
    echo "$key: $value<br>";
  }



?>





</body>
</html>