<html>
<head>
<title>快递信息管理系统</title>
    <meta charset="UTF-8">
    <title>clock</title>
    <script>
        //获取时间函数
        function time1(){
            var today = new Date();
            var year = today.getFullYear();
            var month = today.getMonth()+1;
            var day = today.getDay();
            var hour = today.getHours();
            var minute = today.getMinutes();
            var second = today.getSeconds();

            minute = checkTime(minute);
            second = checkTime(second);

            document.getElementById("time").innerHTML =
                year+"年"+month+"月"+day+"日 "+hour+":"+minute+":"+second;
            t = setTimeout("time1()",500);
        }
        //调整时间格式
        function checkTime(i) {
            if(i<10){
                i="0"+i;
            }
            return i;
        }
    </script>
    <style>
        p.clock{border-width: 1px; position: fixed; top: 300px; right: 500px;}
    </style>
</head>
<body bgcolor="white" text="black" vlink="blue">
<h1 align="center">快递信息管理系统</h1>
<h2 align="center" id="time" class="clock"><script>time1()</script></h2>
 <!--<video controls="" autoplay="0" name="media"><source src="love.mp3" type="audio/mpeg"></video>-->


 <p align="center"><img src="timg.gif"></p>
 <!--<p align="center"><img src="car.jpeg" width="400" hight="390"></p>-->

 <h1 align="center">——————————————————————</h1>
 <h2 align="center"><a href="seekS.html">快递查询</a></h2><br /><br /><br />
 <h1 align="right">管理员模块</h1>
 <h2 align="right"><a href="admin_add.html">管理员登录</a>&nbsp&nbsp&nbsp&nbsp</h2>
<h2 align="right"><a href="admin_addx.html">后台</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>
<br /><br /><br /><br /><br /><br />
<h2 align="left"><a href="index3.php">意见簿</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href=" http://www.kuaidi100.com/">找不到快递？</a></h2>  


</body>
</html>
