<?php
header("Content-type:text/html;charset=utf-8");
$uname=$_POST["userName"];
$usex=$_POST["userSex"];
$usco=$_POST["userScore"];
echo $uname.','.$usex.','.$usco;
$conn=mysqli_connect("localhost","root","","db_student_admin");
mysqli_query($conn,"set names utf8");
$sql="INSERT INTO students(uname,sex,score) VALUES ('$uname','$usex','$usco')";
$row=mysqli_query($conn,$sql);
if($row){
    echo "<script>alert('添加成功');location.href='new_file.php'</script>";
}else{
    echo "<script>alert('添加失败');location.href='../html/tianjia/html'</script>";
}
?>