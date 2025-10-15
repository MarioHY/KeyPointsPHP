<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h4>COOKIE的使用</h4> 
   <hr/>
   <p>这里是页面内容</p>
   <hr/>
   <!-- 
    还是在这个http协议和localhost域，cookie对应发送，
    接受输出客户端发送记录的visits次数
   -->
   <p>登录次数统计：<?php echo $_COOKIE['visits'] ?>次</p>
</body>
</html>