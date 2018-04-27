<?php
class customException extends Exceptio {
    public function errorMessage() {
        // 错误信息
        $errorMsg = '错误行号 ' . $this->getLine(). ' in ' . $this->getFile() . ': <b>' .$this->getMessage().'</b>
        不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try {
    // 检测邮箱
    if(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new customException($email);
    }
}

catch (customException $e) {
    // display custom message
    echo $e->errorMessage();
}
?>