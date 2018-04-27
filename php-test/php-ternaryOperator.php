<?php
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, PHP_EOL;  
?>