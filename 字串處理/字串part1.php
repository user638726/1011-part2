<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串</title>
</head>
<body>
    <?php 
    echo str_replace("aadw1123","********","aadw1123");
    echo "<br>";
    echo str_replace(['a','a','d','w','1','2','3'],"*",'aaddw123');
    echo "<br>";
    echo str_repeat("*",mb_strlen('aaddw123'));
    
    
    
    ?>
</body>
</html>