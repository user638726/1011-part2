<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
    </style>
</head>
<body>
    <h2>利用程式來產生陣列</h2>
    <!--ul>li*--->
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串刑式存入陣中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>
    <?php
    $nine=[];
      for($i=1;$i<=9;$i++){
         for($j=1;$j<=9;$j++) {
            $nine[]= "$i x $j = " .($i*$j);
        }   
     } 
     
     /*echo "<pre>";
        print_r($nine);
        echo "</pre>";*/
       $counter=0;
       foreach($nine as $idx => $n){
        $counter++;
        if($counter==9){
            echo $n . "<br>";
            $counter=0; 
        }else{
              echo $n . ", " ;
        }
}
 echo"<hr>";
 echo "<table>";
 foreach($nine as $idx => $n){
    $v=explode("=",$n)[1];
    if($idx%9==8){
        echo "<td>$v</td></tr>";
    }elseif($idx%9==0){
         echo "<tr><td>$v</td>";           
    }   
        else{
        echo "<td>$v<td>";
    }
 }     
      echo "<table>"


       
      /*echo "<table>";
      for($i=1;$i<=9;$i++){
      echo"<tr>";
      for($j=1;$j<=9;$j++){
        echo "<td>";
        echo "$i x $j = ";
        echo $i*$j;
        echo "</td>";
      }    
       echo "<tr>";
      }
       */    
    ?>
</body>
</html>