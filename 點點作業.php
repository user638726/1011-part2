<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h2>直角三角形<h2>
    <?php
            for($i=0 ; $i<5; $i++){
                //第一次是幾顆星星 (1,2,3,4,5)
                for($j=0 ; $j<($i+1) ; $j++){
                    //第幾層 (1,2,3,4,5)
                    echo "*";
                }
                echo "<br>";
            }

       
    ?>
    <hr>
    <h2>倒直角三角形</h2>
    <?php
            for($i=5 ; $i>0; $i--){
                //第一次是幾顆星星
                for($j=0 ; $j<$i ; $j++){
                    echo "*";
                    //第幾層
                }
                echo "<br>";
            }
    
    
    
    
    ?>
    <h2>正三角形</h2>
    <?php

    for ($i=0;$i<5;$i++){
      for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
        //0 1 2 3 4 是星星旁邊的空格(由上至下)
      }
      for($j=0;$j<(2*$i+1);$j++){
        echo "*";
        //1 3 5 7 9　星星數
    }
        echo "<br>";
        
    }
    ?>
    <h2>倒正三角形</h2>
    <?php

    for ($i=0;$i<5;$i++){
      for($k=0;$k<$i;$k++){
        echo "&nbsp;";
        //0 1 2 3 4 是星星旁邊的空格(由上至下)
     }
     for($j=0;$j<((4-$i)*2+1);$j++){
          echo "*";
          // (4-0)*2 +1 =9
          // (4-1)*2 +1 =7
          // (4-2)*2 +1 =5
          // (4-3)*2 +1 =3
          // (4-4)*2 +1 =1
     }
     echo "<br>";
     }
     ?>
     <h3>倒正三角形</h3>
     <?php

         for($i=4;$i>=0;$i--)
         {
            for ($k=0;$k<(4-$i);$k++){
                echo "&nbsp;";
            }
            //4-$i 0 1 2 3是星星旁邊的空格(由上至下)
            for($j=0;$j<(2*$i+1);$j++){
                echo "*";
            }
            //2 * 4+1=9
            //2 * 3+1=7
            //2 * 2+1=5
            //2 * 1+1=3
            //2 * 0+1=1
            //初始值為4($i)
            echo "<br>";
         }
         ?>
    <h3>菱形</h3>      
    <?php

    for ($i=0;$i<5;$i++){
      for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
        //0 1 2 3 4 是星星旁邊的空格(由上至下)
      }
      for($j=0;$j<(2*$i+1);$j++){
        echo "*";
        //1 3 5 7 9　星星數
    }
        echo "<br>";
        
    }
    for($i=3;$i>=0;$i--)
         {
            for ($k=0;$k<(4-$i);$k++){
                echo "&nbsp;";
            }
            //4-$i 0 1 2 3是星星旁邊的空格(由上至下)
            for($j=0;$j<(2*$i+1);$j++){
                echo "*";
            }
            //2 * 4+1=9
            //2 * 3+1=7
            //2 * 2+1=5
            //2 * 1+1=3
            //2 * 0+1=1
            //初始值為4($i)
            echo "<br>";
         }
    ?>
        <h3>菱形</h3>      
    <?php

    for ($i=0;$i<21;$i++){
      if($i>10)
      { 
        //$i-10=11-10、12-10=1,2
        //2*($i-10)=2,4
        //$i=11,12,13,14
        //2*($i-(2*($i-10)))+1=>19 18 17 16
       
        for($k=0;$k<$i-10;$k++){

            echo "&nbsp;";
        }
        for($j=0;$j<2*($i-(2*($i-10)))+1;$j++){
            echo "*";
        }
        //2*(11-(2*(11-10)))=
        echo "<br>";
     }
         else{
            for($k=0;$k<10-$i;$k++)
            {
                echo "&nbsp;";
            }
            for($j=0;$j<(2*$i+1);$j++){
               echo "*";
            }

            echo "<br>";

        }
           
    }
  
    
   
    ?>
      <h3>菱形</h3>
      <?php
         for($i=0;$i<21;$i++){

            if($i>10){
                $k1=$i-10;
                $j1=2*($i-(2*($i-10)))+1;
            }
         else{
             $k1=10-$i;
             $j1=(2*$i+1);
         }
          for($h=0;$h<$k1;$h++){

            echo "&nbsp";
          }
          for($g=0;$g<$j1;$g++){
            echo "*";
          }
          echo "</br>";
          }
      
      
      
      ?>

    <h3>矩形</h3>
    <?php
          for($i=0 ; $i<5; $i++){
            for($j=0 ; $j<5 ; $j++){
                if($i==0 || $i==4 ){
                    echo "*";
                }  
            elseif($j==0 || $j==4){
                    echo "*";
            }else{
                    echo "&nbsp";
            }
            
        }
              echo "<br>";

    }
?> 
 <h3>矩形含對角線練習<h3>
    <?php
            $width=10;
            for($i=0 ; $i<$width; $i++){
                for($j=0 ; $j<$width ; $j++){
                    if($i==0 || $i==($width-1) ){
                        echo "*";
                    }  
                elseif($j==0 || $j==($width-1)){
                        echo "*";
                }elseif($i==$j || $j==(($width-1)-$i)){
                        echo "*";
                }else{
                    echo "&nbsp";
                }
            }
                  echo "<br>";
    
        }
    ?>
    <h3>矩形含對角線練習<h3>
    <?php
          $width=8;
          for($i=0 ; $i<$width; $i++){
            for($j=0 ; $j<$width ; $j++){
                if($i==0 || $i==($width-1) ){
                    echo "*";
                }  
            elseif($j==0 || $j==($width-1)){
                    echo "*";
            }
            elseif($i==$j|$j==(($width-1)-$i)){
                echo "*";
            }
            else{
                    echo "&nbsp";
            }
            
        }
              echo "<br>";
    }
    ?>
    <h3>菱形中間空白練習<h3>
    <?php
       $size=11;
         for($i=0;$i<$size;$i++){

            if($i>(floor($size/2))){
                $k1=$i-(floor($size/2));
                $j1=2*($i-(2*($i-(floor($size/2)))))+1;
            }
         else{
             $k1=(floor($size/2))-$i;
             $j1=(2*$i+1);
         }
          for($k=0;$k<$k1;$k++){

            echo "&nbsp";
          }
          for($j=0;$j<$j1;$j++){
          if($j==0 || $j==($j1-1)){
          
               echo "*";
          }
           else{
               echo "&nbsp";
          }
        
        }
        echo "<br>";
        }
    ?>
    
    <h3>菱形對角線<h3>
 <?php 
 $size=21;
for($i=0;$i<$size;$i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        if($j==0 || $j==$j1-1 || $i==(floor($size/2)) || $j==floor(($j1-1)/2) ){
            echo "*";
        }else{
            echo "&nbsp;";
        }

    }
    echo "<br>";

}
?>

      
      

       
</body>
</html>