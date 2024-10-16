<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            
        }
        table{
             border:1px solid yellow;
             text-align: center;
             width:100px;
             height:30px;
             border-collapse:collapse;
        }
        td  {
            border:1px solid black;
             padding:6px 10px
             text-align: center; 
        
        }
    </style>
</head>
<body>
<?php
  $a=['','國文','英文','數學','地理','歷史'];
  $b=['judy'=>[
                '國文'=>95,
                '英文'=>64,
                '數學'=>70,
                '地理'=>90,
                '歷史'=>84]];
  $c=['amo'=>[
                      88,78,54,81,71];
  $d=['john', 45,60,68,70,62];
  $e=['peter',59,32,77,54,42];
  $f=['hebe',71,62,80,62,64];
  ?>
  <table>
  <tr>
      <?php
         foreach($a as $value){
             echo "<td>{$value}</td>";
         }
       ?>
  </tr>
        </table>
 <table>
    <tr>
    <?php
     foreach($b as $value)
       echo "<td>{$value}</td>";
     ?>     
   </tr>
 </table>
</body>
</html>




