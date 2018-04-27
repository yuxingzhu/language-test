<?php 
$expire = time() + 60*60*24*30; 
setcookie("user", "runoob", $expire);

// 输出 cookie 值
if(isset($_COOKIE["user"])) {
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
} else {
    echo "普通访客！<br>";
}

// 删除 cookie 过期时间为过去 1 小时

setcookie("user", "", time()-3600);
?>