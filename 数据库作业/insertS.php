<?php
 $con=mysqli_connect("localhost:3306","root","zhangwentao123");
 if(!mysqli_select_db($con,"wjk"))
 { echo "连接wjk数据库出错";
   exit;
 }
 else echo "连接wjk数据库成功\n";
mysqli_query($con,"set names utf8");
$学号=$_POST["学号"];
$姓名=$_POST["姓名"];
$性别=$_POST["性别"];
$出生年月=$_POST["出生年月"];
$院系=$_POST["院系"];
$q="INSERT INTO stu VALUES
(null,'$学号','$姓名','$性别','$出生年月','$院系')";
if (mysqli_query($con,$q))
	echo "新学生记录已经成功加入到学生基本信息表中";
 else
	 echo "添加记录不成功";
mysqli_close($con);
?>
