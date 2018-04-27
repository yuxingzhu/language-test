<?php
// 创建一个有异常处理的函数
function checkNum($number) {
    if($number > 1) {
        throw new Exception("变量值必须大于等于1");
    } 
    return true;
}

// 在 try 块 触发异常
try {
    checkNum(2);
    // 如果抛出异常，以下文本不会输出
    echo "如果输出该内容，说明 $number 变量";
}
// 捕获异常
catch(Exception $e) {
    echo 'Message:' . $e->getMessage();
}
?>