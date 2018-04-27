<?php
class MyDestructableClass {
    function __construct() {
       print "构造函数\n";
       $this->name = "MyDestructableClass";
    }

    function __destruct() {
       print "销毁 " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();
?>