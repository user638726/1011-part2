<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$year=2024;
$yearPart2=[];
for($year;$year+500;$year++){
    if($year %4 == 0 && $year%100>0)
    {
        
        $yearPart2[]=$year;
    } elseif ($year%100==0 && $year%400>0) {
    
        
    
    }elseif ($year%100==0 && $year%400==0){
        
        $yearPart2[]=$year;
    }
    else{
        
       } 

}
echo "<pre>";
print_r($yearPart2);
echo "<pre>";
?>
</body>
</html>