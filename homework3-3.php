<?php
$n = 10; // 여기 원하는 값 넣으면 됨 (100 이하)

// 초기값
$fib[1] = 1;
$fib[2] = 1;

echo "<h2>Fibonacci</h2>";
echo "i&nbsp;&nbsp;f(i)&nbsp;&nbsp;f(i)/f(i-1)<br>";

// 첫 번째 값
echo "1&nbsp;&nbsp;1&nbsp;&nbsp;-<br>";
echo "2&nbsp;&nbsp;1&nbsp;&nbsp;1<br>";

// 3번째부터 계산
for ($i = 3; $i <= $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
    
    $ratio = $fib[$i] / $fib[$i-1];
    
    echo $i . "&nbsp;&nbsp;" . $fib[$i] . "&nbsp;&nbsp;" . $ratio . "<br>";
}
?>