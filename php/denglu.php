<?php
header("Content-type:text/html;charset=utf-8");
$username=$_POST['userName'];
$paw=$_POST['userPaw'];
$conn=mysqli_connect("localhost","root","","db_student_admin");
mysqli_query($conn,"set names utf8");
$sql="select * from user where usename='$username'";
$row=mysqli_query($conn,$sql);
$arr=mysqli_fetch_array($row);
print_r ($arr);
if($username==$arr["usename"]&&$username!=''){
    if($paw==$arr["passwrod"]){
       echo "<script>alert('登陆成功');location.href='new_file.php'</script>";
    }else{
        echo "<script>alert('密码错误');location.href='../html/deng.html'</script>";
    }
}else{
echo "<script>alert('账户错误');location.href='../html/deng.html'</script>";
}
?>