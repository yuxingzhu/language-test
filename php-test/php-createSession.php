<?php
session_start();
// 存储session数据
$_SESSION["views"] = 1;
?>

<html>
    <head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
    </head>
    <body>
    <?php
    // 检索 session 数据
    echo "浏览量：" .$_SESSION["views"];

    if(isset($_SESSION['views']))
    {
        unset($_SESSION['views']);
    }
    ?>
    </body>
</html>