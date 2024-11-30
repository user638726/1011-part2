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
       $sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
       $land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
       $sl=[];
       
       for($i=0;$i<6;$i++){
        echo "<tr>";
        for($j=0;$j<10;$j++){
             $cellnum=10*$i+$j;
             $landIndex=$cellnum%12;
             $sl[]=$sky[$j].$land[$landIndex];
        }
       
       }
       $year=2034;
       echo $sl[($year-4)%60];
       echo "<pre>";
       print_r($sl);
       echo "</pre>";
       
       
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
       $sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
       $land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
       $sl=[];
       
       for($i=0;$i<6;$i++){
        echo "<tr>";
        for($j=0;$j<10;$j++){
             $cellnum=10*$i+$j;
             $landIndex=$cellnum%12;
             $sl[]=$sky[$j].$land[$landIndex];
        }
       
       }
       $year=2034;
       echo $sl[($year-4)%60];
       echo "<pre>";
       print_r($sl);
       echo "</pre>";
       
       
    ?>
</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>