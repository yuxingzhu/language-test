<?php
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    $json = '{"a": 1, "b": 2, "c": 3, }';
    echo json_encode($arr);
    echo json_decode($json);
?>