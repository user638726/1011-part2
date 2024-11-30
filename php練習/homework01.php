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
       $input=60;
       if($input>100)
       {
          echo "false number";
       }
       elseif($input < 0)
        {
          echo "false number";
        }
        elseif($input>=90)
        {
            echo "A";
            $LEVEL="A";
        }
        elseif($input>=80)
        {
            echo "B";
            $LEVEL="8";
        }
        elseif($input>=70)
        {
            echo "c";
            $LEVEL="C";
        }
        elseif($input>=60)
        {
            echo "D";
            $LEVEL="D";
        }
         else
         {
          echo "E" ;
          $LEVEL="E";
         }


         switch("$LEVEL"){
              case "A":
              echo "表現優良";
              break;
              case "B":
              echo "值得肯定";
              break;
              case "C":
              echo "需要更多的練習";
              break;
              case "D":
              echo "需要加強基本功";
              break;
              case "E":
              echo "是否無心學習";
              break;

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
       $input=60;
       if($input>100)
       {
          echo "false number";
       }
       elseif($input < 0)
        {
          echo "false number";
        }
        elseif($input>=90)
        {
            echo "A";
            $LEVEL="A";
        }
        elseif($input>=80)
        {
            echo "B";
            $LEVEL="8";
        }
        elseif($input>=70)
        {
            echo "c";
            $LEVEL="C";
        }
        elseif($input>=60)
        {
            echo "D";
            $LEVEL="D";
        }
         else
         {
          echo "E" ;
          $LEVEL="E";
         }


         switch("$LEVEL"){
              case "A":
              echo "表現優良";
              break;
              case "B":
              echo "值得肯定";
              break;
              case "C":
              echo "需要更多的練習";
              break;
              case "D":
              echo "需要加強基本功";
              break;
              case "E":
              echo "是否無心學習";
              break;

         }
           

    
    
    ?>
</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>