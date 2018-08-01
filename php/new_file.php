<?php
//设置编码
header("Content-Type:text/html;charset=utf-8");
//$username= $_POST["userName"];
//$pwd= $_POST["userPaw"];
//连接数据源
$conn =mysqli_connect('localhost','root','',"db_student_admin");
//连接到库
//if($conn){
//	echo '连接成功';
//}else{
//	echo'连接失败';
//}
//设置编码
mysqli_query($conn,"set names utf8");
//设置sql语句
$sql="select * from students";
//发送sql语句
$row = mysqli_query($conn,$sql);
//$arr = mysqli_fetch_array($row);
echo "<link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
<h1 class='h1'>学生成绩表</h1>
<table class='table table-bordered' style='width: 800px;'><tr><th>姓名</th><th>性别</th><th>成绩</th><th>操作</th><th>更改</th></tr>";
//循环当$arr数组不为空集时就持续循环
while($arr = mysqli_fetch_array($row)){
    echo "<tr><td>$arr[uname]</td><td>$arr[sex]</td><td>$arr[score]</td><td><a href='delete.php?id=$arr[id]'>删除</a></td><td><a href='update.php?id=$arr[id]&uname=$arr[uname]&usex=$arr[sex]&uscore=$arr[score]'>修改</a></td></tr>";
}
echo "</table>";
echo "<a href='../html/tianjia.html'>点击添加学生信息</a>"
?>