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
    $b = 100;
    $randomnumber=rand($a,$b);
    if(in_array($randomnumber)==true){
        echo "已有重複的數字";
    }else{
        $inline=$randomnumber;
    }
    foreach($inline as $idx){
        echo $idx;
    }
    
    
    
    
    ?>
</body>
</html>