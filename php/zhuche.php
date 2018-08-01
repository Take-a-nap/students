<?php
header("Content-Type:text/html;charset=utf-8");
$username=$_POST['userName'];
$paw=$_POST['userPaw'];
$conn=mysqli_connect("localhost","root","","db_student_admin");
//设置编码
mysqli_query($conn,"set names utf8");
$sql="insert into user (usename,passwrod)values('$username',$paw)";
mysqli_query($conn,$sql);
echo "<script>alert('注册成功');location.href='../html/deng.html'</script>"
?>
