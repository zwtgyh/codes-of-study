<?php
$快递单号=$_POST["快递单号"];
 $con=mysqli_connect("localhost:3306","root","zhangwentao123");
 if (!mysqli_select_db($con,"wjk"))
 { echo "连接wjk数据库出错";
   exit;
 }
else echo "连接wjk数据库成功\n";
mysqli_query($con,"set names utf8");

$q="SELECT * FROM stu WHERE 快递单号='$快递单号'";
   $result=mysqli_query($con,$q);
   if ($result)
   {
	   echo "信息查询成功<br>";
	   $p=mysqli_fetch_array($result,MYSQLI_BOTH);
	   if ($p)
	   { 
                echo "快递单号:".$p[1]."<br>";
		echo "位置:".$p[2]."<br>";
		echo "收件人:".$p[3]."<br>";
		echo "电话:".$p[4]."<br>";
	   }
	   else echo "该快递信息不存在";
   }
   else echo "信息查询失败";
?>
<html>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<h2 align="right"><a href="index.php">返回首页</a></h2>
</html>
