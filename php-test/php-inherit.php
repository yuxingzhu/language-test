<?php
// 子类扩展站点类别
class Child_Site extends Site {
    var $category;

    function setCate($par) {
        $this->category = $par;
    }

    function getCate() {
        echo $this->category . PHP_EOL;
    }
}
?>