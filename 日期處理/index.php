<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start(); // 啟用 session

// 檢查 session 中是否有存儲的年份和月份，若無則設為當前值
if (isset($_SESSION['year'])) {
    $year = $_SESSION['year'];
} else {
    $year = date('Y');
}

if (isset($_SESSION['month'])) {
    $month = $_SESSION['month'];
} else {
    $month = date('m');
}

// 如果表單提交，更新 session 中的年份和月份
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['year']) && isset($_GET['month'])) {
    $year = (int)$_GET['year'];
    $month = (int)$_GET['month'];
    $_SESSION['year'] = $year; // 存儲到 session
    $_SESSION['month'] = $month; // 存儲到 session
}
if (isset($_GET['reset'])) {
    unset($_SESSION['year']);
    unset($_SESSION['month']);
    $year = date('Y');
    $month = date('m');
}
// 計算上一個月和下一個月
$prevMonth = $month - 1;
$nextMonth = $month + 1;
$prevYear = $year;
$nextYear = $year;

if ($prevMonth < 1) {
    $prevMonth = 12;
    $prevYear--;
}
if ($nextMonth > 12) {
    $nextMonth = 1;
    $nextYear++;
}

// 計算前一年和下一年
$prevYearFull = $year - 1;
$nextYearFull = $year + 1;

// 計算這個月份的第一天是星期幾
$firstDayOfMonth = strtotime("$year-$month-01");
$firstDayOfWeek = date('w', $firstDayOfMonth);
$daysInMonth = date('t', $firstDayOfMonth);
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; background-color: black; color: yellow }
        th { background-color: black; color: yellow }
        .nav { margin: 20px 0; text-align: center;color:yellow;}
        h1, h2{
            color:yellow;
            text-align: center;
        }
        a{
            text-decoration: none;
            color:yellow;
        }
        body {
            background-image: url(./People\ In\ This\ Online\ Group\ Are\ Sharing\ Photos\ Of\ The\ Most\ Beautiful\ Places\ They’ve\ Discovered.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>

<h1>萬年曆</h1>
<form method="GET" class="nav">

    <label for="year">年份:</label>
    <input type="number" id="year" name="year" value="<?= $year ?>" required>
    <label for="month">月份:</label>
    <input type="number" id="month" name="month" value="<?= $month ?>" required min="1" max="12">
    <input type="submit" value="顯示">
</form>

<h2><?= $year ?> 年 <?= $month ?> 月</h2>
<div class="nav">

    <a href="?reset=1">回到當前年月</a> |
    <a href="?year=<?= $prevYearFull ?>&month=<?= $month ?>">&laquo; 前一年</a> | 
    <a href="?year=<?= $nextYearFull ?>&month=<?= $month ?>">下一年 &raquo;</a> | 
    <a href="?year=<?= $prevYear ?>&month=<?= $prevMonth ?>">&laquo; 上一個月</a> | 
    <a href="?year=<?= $nextYear ?>&month=<?= $nextMonth ?>">下一個月 &raquo;</a>
</div>

<table>
    <tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr>
    <tr>

    <?php
    // 填充空白的單元格
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }

    // 顯示每一天
    for ($day = 1; $day <= $daysInMonth; $day++) {
        if (($firstDayOfWeek + $day - 1) % 7 == 0 && $day != 1) {
            echo "</tr><tr>";
        }
        echo "<td>$day</td>";
    }
    ?>

    </tr>
</table>

</body>
</html>

</body>
</html>