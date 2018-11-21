<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /*  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 index.htm	*/
  if ($passed != "TRUE")
  {
    header("location:admin_addx.html");
    exit();
  }
?>


﻿<!DOCTYPE html>
<head>
<body text="black" vlink="blue" >
    <meta charset="UTF-8">
    <title>管理员账号管理</title>
    <script>
        function doDel(id) {
            if (confirm("确定要删除么？")) {
                window.location = 'action2.php?action=del&id=' + id;
            }
        }
    </script>
</head>
<body>
<center>
    <?php
    include_once "menu2.php";
    ?>
    <h2>管理员账号信息</h2>
    <table align="center" width="600" border="1">
        <tr>
            <th>Account</th>
            <th>Password</th>
        <!--<th>位置</th>
            <th>收件人</th>
            <th>电话</th>-->
            <th>Action</th>
        </tr>
        <?php
        //1.连接数据库
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=wjk;", "root", "zhangwentao123");
        } catch (PDOException $e) {
            die("数据库连接失败" . $e->getMessage());
        }
        //2.解决中文乱码问题
        $pdo->query("SET NAMES 'UTF8'");
        //3.执行sql语句，并实现解析和遍历
        $sql = "SELECT * FROM users2";
        foreach ($pdo->query($sql) as $row) {
            echo "<tr>";
            echo "<td>{$row['account']}</td>";
            echo "<td>{$row['password']}</td>";
            //echo "<td>{$row['位置']}</td>";
            //echo "<td>{$row['收件人']}</td>";
            //echo "<td>{$row['电话']}</td>";
            echo "<td>
                    <a href='javascript:doDel({$row['id']})'>删除</a>
                    <a href='edit2.php?id=({$row['id']})'>修改</a>
                  </td>";
            echo "</tr>";
        }

        ?>

    </table>
</center>

</body>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<h2 align="right"><a href="index.php">注销</a></h2>
</html>
