<?php
// 創建一個 9x9 的二維陣列
$multiplicationTable = array();

// 填充乘法表
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $multiplicationTable[$i][$j] = $i * $j;
    }
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>九九乘法表</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">九九乘法表</h1>
    <table>
        <thead>
            <tr>
                <th>×</th>
                <?php for ($j = 1; $j <= 9; $j++): ?>
                    <th><?php echo $j; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 9; $i++): ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <?php for ($j = 1; $j <= 9; $j++): ?>
                        <td><?php echo $multiplicationTable[$i][$j]; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>
