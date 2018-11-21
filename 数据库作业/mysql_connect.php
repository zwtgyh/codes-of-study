<?php
$mysql = new mysqli();
 
$mysql->connect('localhost','root','zhangwentao123');
 
if($mysql){
   echo "连接成功了!";
}
else{
   echo "连接挂掉了";
}
phpinfo();
?>
