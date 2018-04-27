<?php
$favcolor = "red";

switch ($favcolor) {
    case "red": 
        echo "你喜欢的颜色是红色!";
        break;
    case "blue": 
        echo "你喜欢的颜色是蓝色!";   
    case "green": 
        echo "你喜欢的颜色是绿色!";
        break;
    default: 
        echo "你喜欢的颜色不是 红, 蓝, 或者绿色!";         
}
?>