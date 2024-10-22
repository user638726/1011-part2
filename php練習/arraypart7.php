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
    
    echo "Generated number: " . $randomnumber . "\n";

    if(in_array($randomnumber,$inline)){
        echo "已有重複的數字\n";
    }else{
        $inline[]=$randomnumber;
    }
    echo "Numbers in array: ";
    foreach($inline as $idx){
        echo $idx . " ";
    }
    
    
    
    
    ?>
</body>
</html>