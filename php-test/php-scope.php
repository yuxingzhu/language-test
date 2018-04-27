<?php
    $x = 5; // 全局变量
function myTest() {
    $y = 10; // 局部变量
    echo "<p>测试函数内变量：</p>";
    echo "变量 x 为：$x";
    echo "<br>";
    echo "变量 y 为：$y";
}

myTest();

echo "<p>测试函数外变量：</p>";
echo "变量 x 为：$x";
echo "<br>";
echo "变量 y 为：$y";
?>