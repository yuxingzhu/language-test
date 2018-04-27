<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    名字：<input type="text" name="name">
    <span class="error">*<?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    网址：<input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    备注：<textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    性别：
    <input type="radio" name="gender" value="female">女
    <input type="radio" name="gender" value="male">男
    <span class="error">*<?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>