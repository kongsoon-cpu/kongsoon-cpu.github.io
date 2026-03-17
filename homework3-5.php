<?php
$year = 2001;
$month = 2;

// 1일의 요일 (0:일 ~ 6:토)
$start_day = date("w", strtotime("$year-$month-01"));

// 해당 달의 마지막 날짜
$last_day = date("t", strtotime("$year-$month-01"));
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>캘린더</title>
</head>
<body>

<h2><?php echo $year . "년 " . $month . "월"; ?></h2>

<table border="1" width="500">
<tr>
    <th>일</th>
    <th>월</th>
    <th>화</th>
    <th>수</th>
    <th>목</th>
    <th>금</th>
    <th>토</th>
</tr>

<tr>
<?php
// 빈칸 출력
for ($i = 0; $i < $start_day; $i++) {
    echo "<td></td>";
}

// 날짜 출력
for ($day = 1; $day <= $last_day; $day++) {
    echo "<td>$day</td>";

    // 토요일이면 줄바꿈
    if (($day + $start_day) % 7 == 0) {
        echo "</tr><tr>";
    }
}
?>
</tr>

</table>

</body>
</html>