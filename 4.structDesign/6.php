<?php
// $_COOKIE接受客户端的Cookie数据，如果客户端存放着有 
//isset判断变量是否存在，也就是客户端是否有Cookie
// visits自定义的Cookie名称
if(!isset($_COOKIE['visits']))
{
    // 如果客户端没有Cookie，也就是第一次访问,初始化访问次数
    $_COOKIE['visits'] = 0;
}
// 第一次访问visits变量就为1，第n次访问就+1
$visits=$_COOKIE['visits'] + 1;
// 向客户端设置Cookie,visits为Cookie名, $visits为值，第三个是Cookie过期时间，1年
setcookie('visits', $visits, time() + 3600 * 24 * 365);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie使用</title>
</head>
<body>
    <h4>COOKIE的使用</h4>
    <p>这是您的第<?php echo $visits ?>次登录，感谢您的关注!</p>
    <hr/>
    <a href="6_1.php">进入另外页面</a>
    <a href="6_2.php">重新统计登录次数</a>
    
</body>
</html>