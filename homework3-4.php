<?php
$w1 = $_POST["width1"];
$h1 = $_POST["height1"];

$w2 = $_POST["width2"];
$h2 = $_POST["height2"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>결과</title>
</head>
<body>

<h2>계산 결과</h2>

<?php
if ($w1 != "" && $h1 != "") {
    $triangle = $w1 * $h1 / 2;
    echo "<h3>삼각형 면적: " . $triangle . "</h3>";
}

if ($w2 != "" && $h2 != "") {
    $rectangle = $w2 * $h2;
    echo "<h3>직사각형 면적: " . $rectangle . "</h3>";
}
?>

<br>
<a href="homework3-4.html">다시 입력하기</a>

</body>
</html>