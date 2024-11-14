<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $inline=[];
    $a = 1;
    $b = 38;
    $counter=0;
    
    
    while($counter<6){
        $randomnumber=rand($a,$b);
        echo "生成的數字: " . $randomnumber . "\n";
        $counter++;
    if(!in_array($randomnumber,$inline)){
        $inline[]=$randomnumber;
      } 
    } 
     echo "Numbers in array: ";
    foreach($inline as $idx){
        echo $idx . ", " ;
    }
    
    
    
    
    ?>
</body>
</html>