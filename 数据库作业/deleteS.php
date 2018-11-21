<?php
$con=mysqli_connect("localhost:3306","root","zhangwentao123");
if (!mysqli_select_db($con,"wjk"))
{ echo "连接wjk数据库出错";
  exit;
}
else echo "连接wjk数据库成功\n";
mysqli_query($con,"set names utf8");
$快递单号=$_POST["快递单号"];
$q="DELETE FROM stu WHERE 快递单号='$快递单号'";
 if (mysqli_query($con,$q))
	 echo "相关信息删除成功";
 else
 echo "相关信息删除失败";
 mysqli_close($con);
 ?>
