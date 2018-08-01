<?php
header("Content-type:text/html;charset=utf-8");
$uid=$_GET['id'];
$uname=$_GET['uname'];
$usex=$_GET['usex'];
$uscore=$_GET['uscore'];
echo "<form action='really_update.php' method='post'>
<input type='hidden' value='$uid' name='useid'/><br/>
姓名<input type='text' value='$uname' name='usename'/><br/>
性别<input type='text' value='$usex' name='usesex'/><br/>
成绩<input type='text' value='$uscore' name='usescore'/><br/>
<input type='submit' value='确定'/>
</form>
"
?>