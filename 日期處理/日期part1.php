<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
    <?php
       echo date("Y/m/d H:i:s");

       
       echo "<br>";
       $start="2024-10-31";
       $end="2025-10-30";
       $starttime=strtotime($start);
       echo "開始時間".$starttime;
       echo "<br>";
       $endTime=strtotime($end);
       echo "結束時間".$endTime;
       echo "<br>";
       $gap=$endTime-$starttime;
       echo "差距秒:".$gap;
       echo "<br>";

       $days=$gap/(60*60*24);
       echo "間隔:".$days;
       ?>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <?php
         $start=date("Y-m-d");
         $end="2025-10-07";
         $starttime=strtotime($start);
         echo "今日日期".$starttime;
         echo "<br>";
         $endTime=strtotime($end);
         echo "下次生日".$endTime;
         echo "<br>";
         $gap=$endTime-$starttime;
         echo "差距秒:".$gap;
         echo "<br>";
  
         $days=$gap/(60*60*24);
         echo "距下次生日還有:".$days ."天";
    ?>
</body>
</html>