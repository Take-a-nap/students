<?php
header("Content-type:text/html;charset=utf-8");
$uid=$_GET['id'];
$conn=mysqli_connect("localhost","root","","db_student_admin");
mysqli_query($conn,"set names uft8");
$sql="DELETE FROM students WHERE id=$uid";
$row=mysqli_query($conn,$sql);
if($row){
    echo "<script>alert('删除成功');location.href='new_file.php'</script>";
}else{
    echo "<script>alert('删除失败');location.href='new_file.php'</script>";
}
?>