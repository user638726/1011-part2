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
    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
    <?php
         $weekString=[
            'Monday'=>['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
            'Tuesday'=>['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
            'Wednesday'=>['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
            'Thursday'=>['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
            'Friday'=>['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
            'Saturday'=>['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
            'Sunday'=>['min'=>'七','short'=>'周日','fulltext'=>'星期日']
            ];
        echo date("2021/10/5") . "<br>";
        echo date('10'.'月'.'5日'.'l'). "<br>";
        echo date('10'.'月'.'5日'.'星期'.'w'). "<br>";
        echo date("Y年m月d日");
        echo "<br>";
        echo date("m月d日 l");
         echo "<br>";
        echo date("m月d日").$weekString[date("l")]['min'];
        echo "<br>";
        echo date("m月d日").$weekString[date("l")]['short'];
        echo "<br>";
        echo date("m月d日").$weekString[date("l")]['fulltext'];
        echo "<br>";/*$time=date("y年m月n日",'星期'.'w');*/
        echo "今天是西元".date("Y年m月d日");
        if(date("N")>5){
            echo "假日";
        }else{
            echo "上班日";
         }
        echo "<br>";

        ?>
        <h2>利用迴圈來計算連續五個周一的日期範例:
 
           2021-10-04 星期一
           2021-10-11 星期一
           2021-10-18 星期一
           2021-10-25 星期一
           2021-11-01 星期一</h2>
           <?php 
for($i=0;$i<5;$i++){
    $timestamp=strtotime("+$i weeks".date("Y-m-d"));
    echo date("Y-m-d",$timestamp);
    echo "&nbsp;";
    echo $weekString[date("l")]['fulltext'];
    echo "<br>";
}


?>
</body>
</html>