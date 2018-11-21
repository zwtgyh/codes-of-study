<html>
<head>
    <meta charset="UTF-8">
    <title>快递信息管理</title>

</head>
<body>
<center>
    <?php
    include_once "menu.php";
    //1.连接数据库
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=wjk;", "root", "zhangwentao123");
    } catch (PDOException $e) {
        die("数据库连接失败" . $e->getMessage());
    }
    //2.防止中文乱码
    $pdo->query("SET NAMES 'UTF8'");
    //3.拼接sql语句，取出信息
    $sql = "SELECT * FROM stu WHERE id =" . $_GET['id'];
    $stmt = $pdo->query($sql);//返回预处理对象
    if ($stmt->rowCount() > 0) {
        $stu = $stmt->fetch(PDO::FETCH_ASSOC);//按照关联数组进行解析
    } else {
        die("没有要修改的数据！");
    }
    ?>
    <form method="post" action="action.php?action=edit">

        <input type="hidden" name="id" id="id" value="<?php echo $stu['id']; ?>"/>
        <table>
            <tr>
                <td>快递单号</td>
                <td><input id="快递单号" name="快递单号" type="text" value="<?php echo $stu['快递单号'] ?>"/></td>

            </tr>
            <tr>
                <td>位置</td>
                <td><input id="位置" name="位置" type="text" value="<?php echo $stu['位置'] ?>"/></td>

            </tr>
            <tr>
                <td>收件人</td>
                <td><input type="text" name="收件人" id="收件人" value="<?php echo $stu['收件人'] ?>"/></td>
            </tr>
            <tr>
                <td>电话</td>
                <td><input id="电话" name="电话" type="text" value="<?php echo $stu['电话'] ?>"/></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" value="修改"/>  
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>

    </form>


</center>
</body>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<h2 align="right"><a href="main.php">返回上一页</h2>
</html>
