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
    <?php
        $header=['', '國文', '英文', '數學', '地理', '歷史'];
        $judy=['judy',95,64,70,90,84];
        $amo=['amo',88,78,54,81,71];
        $john=['john',45,60,68,70,62];
        $students=[['judy',95,64,70,90,84],
                   ['amo',88,78,54,81,71],
                   ['john',45,60,68,70,62]];
    ?>
    <table>
    <tr>
    <?php
    foreach($header as $value){
        
        echo "<td>{$value}</td>";
    }
    ?>
     </tr>
    <tr>
        <?php
    foreach($judy as $value){
 
        echo "<td>{$value}</td>";
    }   
    ?>
    <tr>
        <?php
        foreach($amo as $value){
            echo "<td>{$value}</td>";
        }
    ?>
    <tr>
        <?php
           foreach($john as $value){
            echo "<td>{$value}</td>";
           }
        ?>
    </table>
</body>
</html>