<?php

//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=wjk;","root","zhangwentao123");
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}

//2.防止中文乱码
$pdo->query("SET NAMES 'UTF8'");

//3.通过action的值做地应操作

switch($_GET['action']){
    case "add"://增加操作
        $account = $_POST['account'];
        $password = $_POST['password'];
        //$收件人 = $_POST['收件人'];
        //$电话 = $_POST['电话'];

        $sql = "insert into users2 values(null,'{$account}','{$password}')";
        $rw = $pdo->exec($sql);
        if($rw > 0){
            echo "<script>alert('增加成功');window.location='main2.php'</script>";
        }else{
            echo "<script>alert('增加失败');window.history.back();</script>";
        }
        break;

    case "del"; //删除操作
        $id = $_GET['id'];
        $sql = "delete from users2 where id={$id}";
        $pdo->exec($sql);
        header("Location:main2.php");
        break;

    case "edit":

        //1.获取表单信息
        $account = $_POST['account'];
        $password = $_POST['password'];
        //$收件人 = $_POST['收件人'];
        //$电话 = $_POST['电话'];
        $id = $_POST['id'];

        $sql = "update users2 set 
account='{$account}',password='{$password}' where id={$id}";
        $rw = $pdo->exec($sql);
        if($rw>0){
            echo "<script>alert('修改成功');window.location='main.php'</script>";
        }else{
           echo "<script>alert('增加失败');window.history.back();</script>";
        }
        break;
}
?>
