<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border=1>";
      for($i=1;$i<=9;$i++)
      {
        echo "<tr>";
        for($j=1;$j<=9;$j++){
        echo "<td>";    
        echo "$i x $j = ".($i*$j);
        echo "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
      echo "<br>";
    
    echo "<table border=1>"; 
   
        for($i=0;$i<=9;$i++){
            echo "<tr>";
            
        for($j=0;$j<=9;$j++){
            echo "<td>";
            if($j==0 && $i==0){
                echo "";
            }
            elseif ($i==0) {
                echo "$j";
            }
            elseif($j == 0){
                echo "$i";
            }else{
                echo ($i*$j);
            }
        
            echo "</td>";
        }
         echo "</tr>";
        }
      echo "</table>";

 ?>

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border=1>";
      for($i=1;$i<=9;$i++)
      {
        echo "<tr>";
        for($j=1;$j<=9;$j++){
        echo "<td>";    
        echo "$i x $j = ".($i*$j);
        echo "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
      echo "<br>";
    
    echo "<table border=1>"; 
   
        for($i=0;$i<=9;$i++){
            echo "<tr>";
            
        for($j=0;$j<=9;$j++){
            echo "<td>";
            if($j==0 && $i==0){
                echo "";
            }
            elseif ($i==0) {
                echo "$j";
            }
            elseif($j == 0){
                echo "$i";
            }else{
                echo ($i*$j);
            }
        
            echo "</td>";
        }
         echo "</tr>";
        }
      echo "</table>";

 ?>

</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>