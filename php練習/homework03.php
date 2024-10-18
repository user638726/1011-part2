<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $n=50;
     echo"n=".$n."<br>";
     for($i=1;$i<=$n;$i=$i+2)
     {
        echo $i;
        echo ",";

     }
     echo "<br>";
     $n=100;

     for($i=10; $i<=$n ; $i=$i+10)
     {
        echo "$i";
        echo ",";
     }

     echo "<br>";
     $n=97;

     for($i=3; $i<=$n ; $i=$i+2)
     {
        echo "$i";
        echo ",";
     }

    ?>
</body>
</html>