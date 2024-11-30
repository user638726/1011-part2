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
if(isset($_GET['height'])){
     $height=$_GET['height'];
  }else if(isset($_POST['height'])){
    $height=$_POST['height'];

  }else{
    echo "請使用正確管道進到此頁面";
    exit();
  }

  if(isset($_GET['number'])){
    $number=$_GET['number'];
  }else if(isset($POST['number']))
  {
    $number=$_POST['number'];
  }else{
    echo "請使用正確管道進到此頁面";
    exit();
  }
  
   echo "我的身高為".$height;
   echo "<br>";
   echo "我的體重為".$number;
   echo "<br>";
   $h=$height/100;
   
   $BMI=round($number/($h * $h),2);
   
   
   if($BMI<18.5){
       $level="體重過輕";
    }else if(18.5<=$BMI && $BMI<24){
    $level="健康體位";
   }else if(24<=$BMI && $BMI<27){
    $level="過重";
   }else if(27<=$BMI && $BMI<30){
     $level="輕度肥胖";
   }else if(30<=$BMI && $BMI<35){
    $level="中度肥胖";
    }
    else{
    $level="重度肥胖";
}
?>
<div>你的BMI為:<?=$BMI;?></div>
<div>體位判定為:<?=$level;?></div>
<div>
    <a href="index.php?BMI=<?=$BMI;?>">重首頁/重新量測</a>
</div>
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
if(isset($_GET['height'])){
     $height=$_GET['height'];
  }else if(isset($_POST['height'])){
    $height=$_POST['height'];

  }else{
    echo "請使用正確管道進到此頁面";
    exit();
  }

  if(isset($_GET['number'])){
    $number=$_GET['number'];
  }else if(isset($POST['number']))
  {
    $number=$_POST['number'];
  }else{
    echo "請使用正確管道進到此頁面";
    exit();
  }
  
   echo "我的身高為".$height;
   echo "<br>";
   echo "我的體重為".$number;
   echo "<br>";
   $h=$height/100;
   
   $BMI=round($number/($h * $h),2);
   
   
   if($BMI<18.5){
       $level="體重過輕";
    }else if(18.5<=$BMI && $BMI<24){
    $level="健康體位";
   }else if(24<=$BMI && $BMI<27){
    $level="過重";
   }else if(27<=$BMI && $BMI<30){
     $level="輕度肥胖";
   }else if(30<=$BMI && $BMI<35){
    $level="中度肥胖";
    }
    else{
    $level="重度肥胖";
}
?>
<div>你的BMI為:<?=$BMI;?></div>
<div>體位判定為:<?=$level;?></div>
<div>
    <a href="index.php?BMI=<?=$BMI;?>">重首頁/重新量測</a>
</div>
</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>