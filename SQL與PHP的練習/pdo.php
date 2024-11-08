<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{
            border-collapse:collapse;
            width:400px;
            margin:auto;
         }
         table, td{
            padding:5px 15px;
            text-align:center;
            border:1px solid black;
         }    
    </style>

</head>
<body>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from classes";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach($rows as $row)
     {
        echo "<table>".
        "<td>".$row['id']."<td>".
        "<td>".$row['name']."<td>".
        "<td>".$row['tutor']."<td>".
        "</table>";
    }

    echo"<pre>";
    print_r($rows);
    echo "</pre>"
    ?>
</body>
</html>