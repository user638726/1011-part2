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
$leap=[];

for($i=2024;$i<=2524;$i++){
    if($i % 4==0 && ($i % 100 != 0 || $i % 400 == 0)){
        $leap[]=$i;

    }
    echo "<pre>";
    print_r($leap);
    echo "</pre>"; 

}

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
$leap=[];

for($i=2024;$i<=2524;$i++){
    if($i % 4==0 && ($i % 100 != 0 || $i % 400 == 0)){
        $leap[]=$i;

    }
    echo "<pre>";
    print_r($leap);
    echo "</pre>"; 

}

?> 


</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>