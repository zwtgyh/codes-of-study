<html>
<head>
    <title>快递信息管理</title>
</head>
<body text="black" vlink="blue">
<center>
    <?php include("menu.php"); ?>
    <h3>增加快递信息</h3>
    <form method="post" action="action.php?action=add">

        <table>
            <tr>
                <td>快递单号</td>
                <td><input  name="快递单号" type="text"/></td>

            </tr>
            <tr>
                <td>位置</td>
                <td><input  name="位置" type="text"/></td>

            </tr>
            <tr>
                <td>收件人</td>
                <td><input type="text" name="收件人" /></td>
            </tr>
            <tr>
                <td>电话</td>
                <td><input  name="电话" type="text"/></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" value="增加"/>  
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>

    </form>
</center>
</body>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<h2 align="right"><a href="main.php">返回上一页</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php">注销</a></h2>
</html>
