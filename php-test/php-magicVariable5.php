<?php
class test {
    function _print() {
        echo '类名为：' . __CLASS__ ."<br>";
        echo '函数名为：' . __FUNCTION__;
    }
}
$t = new test();
$t->_print();
?>