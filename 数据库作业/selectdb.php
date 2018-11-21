<?php
  $con=mysqli_connect("localhost:3306","root","zhangwentao123");
  if(!mysqli_select_db($con,"wjk"))
    { echo "连接wjk数据库出错"；
      exit;
    }
  else echo "连接wjk数据库成功\n"
?>

