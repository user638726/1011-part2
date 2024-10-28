<?php
session_start();

// 設定默認年份和月份
if (!isset($_SESSION['year'])) {
    $_SESSION['year'] = date('Y'); // 當前年份
}
if (!isset($_SESSION['month'])) {
    $_SESSION['month'] = date('n'); // 當前月份
}

// 處理按鈕點擊
if (isset($_POST['next_year'])) {
    $_SESSION['year']++;
} elseif (isset($_POST['prev_year'])) {
    $_SESSION['year']--;
} elseif (isset($_POST['next_month'])) {
    if ($_SESSION['month'] == 12) {
        $_SESSION['month'] = 1;
        $_SESSION['year']++;
    } else {
        $_SESSION['month']++;
    }
} elseif (isset($_POST['prev_month'])) {
    if ($_SESSION['month'] == 1) {
        $_SESSION['month'] = 12;
        $_SESSION['year']--;
    } else {
        $_SESSION['month']--;
    }
}

$year = $_SESSION['year'];
$month = $_SESSION['month'];

function draw_calendar($month, $year) {
    // 獲取這個月的第一天和最後一天
    $first_day = mktime(0, 0, 0, $month, 1, $year);
    $total_days = date('t', $first_day);
    $date_info = getdate($first_day);
    $day_of_week = $date_info['wday'];

    // 日曆標題
    echo "<h2>" . date('F', $first_day) . " " . $year . "</h2>";
    echo "<table border='1'>";
    echo "<tr>";

    // 列出星期
    $weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    foreach ($weekdays as $day) {
        echo "<th>$day</th>";
    }
    echo "</tr><tr>";

    // 空白格子
    for ($i = 0; $i < $day_of_week; $i++) {
        echo "<td></td>";
    }

    // 列出日期
    for ($day = 1; $day <= $total_days; $day++) {
        echo "<td>$day</td>";
        if (($day + $day_of_week) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    echo "</tr>";
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>萬年曆</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="prev_month">上一個月</button>
        <button type="submit" name="next_month">下一個月</button>
        <button type="submit" name="prev_year">前一年</button>
        <button type="submit" name="next_year">下一年</button>
    </form>

    <?php draw_calendar($month, $year); ?>
</body>
</html>
