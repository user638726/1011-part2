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
   $year=2407;

   if($year %4 == 0 && $year%100>0)
{
    echo "西元";
    echo $year;
    echo "是閏年";
} elseif ($year%100==0 && $year%400>0) {

    echo "西元";
    echo "$year";
    echo "是平年";

}elseif ($year%100==0 && $year%400==0){
    echo "西元";
    echo "$year";
    echo "是閏年";
}
else{
    echo "西元";
    echo "$year";
    echo "是平年";
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
   $year=2407;

   if($year %4 == 0 && $year%100>0)
{
    echo "西元";
    echo $year;
    echo "是閏年";
} elseif ($year%100==0 && $year%400>0) {

    echo "西元";
    echo "$year";
    echo "是平年";

}elseif ($year%100==0 && $year%400==0){
    echo "西元";
    echo "$year";
    echo "是閏年";
}
else{
    echo "西元";
    echo "$year";
    echo "是平年";
   } 
   ?>
</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>