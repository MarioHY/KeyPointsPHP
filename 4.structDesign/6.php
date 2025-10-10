<?php
if(!isset($_COOKIE['visits']))
{
    $_COOKIE['visits'] = 0;
}
$visits=$_COOKIE['visits'] + 1;
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