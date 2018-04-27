<?php
class BaseClass {
    function __construct() {
        print "BaseClass 类中构造方法" . PHP_EOL;
    }
}
class SubClass extends BaseClass {
    function __construct() {
        parent::__construct(); // 子类构造方法不能自动调用父类的构造方法
        print "SubClass 类中构造方法" . PHP_EOL;
    }
}
class OtherSubClass extends BaseClass {
   // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();
?>