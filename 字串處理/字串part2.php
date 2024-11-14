<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>字串分割</h2>
    <h2>將”this,is,a,book”依”,”切割後成為陣列</h2>
    <?php
       $str="this,is,a,book";
       $str=explode(",",$str);/*列印出array值*/
       echo "<pre>";
       print_r($str);
       echo "<pre>";
       ?>
    <h2>字串組合</h2>
    <h2>將上例陣列重新組合成“this is a book”</h2>
    <?php
    
    $str=join(" ",$str);/*合併array值*/
    echo "<pre>";
    echo $str."<br>";
    ?>
    <h2>子字串取用</h2>
    <h2>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h2>
    <?php
    
    
    echo mb_substr("The reason why a great man is great is that he resolves to be a great man", 0,10)."..."."<br>";
  
    echo substr("The reason why a great man is great is that he resolves to be a great man", 0,10)."..."."<br>";

    $str="一個偉人之所以是偉人，往往在於幾個關鍵特質";
    $str=mb_substr($str,0,10);
    echo $str."<br>";
    $str=substr($str,0,10);
    echo $str."<br>";
    
    ?>
    <h2>尋找字串與HTML、css整合應用</h2>
    <h2>給定一個句子，將指定的關鍵字放大
“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.</h2>
    
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $key="程式設計";
    $large="<span style='font-size:100px;color:blue'>".$key."</span>";
    $str=str_replace($key,$large,$str);
    echo $str."<br>";

    ?>
    </body>
</html>