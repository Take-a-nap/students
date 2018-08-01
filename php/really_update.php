<?php
header("content-type:text/html;charset=utf-8");
$uid=$_POST['useid'];
$uname=$_POST['usename'];
$usex=$_POST['usesex'];
$uscore=$_POST['usescore'];
$conn=mysqli_connect("localhost","root","","db_student_admin");
mysqli_query($conn,"set names utf8");
$sql="UPDATE students SET uname='$uname',sex='$usex',score=$uscore WHERE id=$uid";
$row=mysqli_query($conn,$sql);
if($row){
    echo "<script>alert('修改成功');location.href='new_file.php'</script>";
}else{
    echo "<script>alert('修改失败');location.href='new_file.php'</script>";
}
?>

