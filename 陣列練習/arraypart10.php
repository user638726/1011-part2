<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
      $a=[2,4,6,1,8];
      echo "<pre>";
      print_r($a);
      echo "</pre>";
      for($i=0;$i<floor(count($a)/2); $i++){
            $tmp=$a[$i];
            $a[$i]=$a[count($a)-1-$i];
            $a[count($a)-1-$i]=$tmp;

      }
      echo "<br>";
      echo "<pre>";
      print_r($a);
      echo "</pre>";
      echo "<hr>";
      echo "<pre>";
      print_r(array_reverse($a));
      echo "</pre>";






    
    
    
    ?>
</body>
</html>