<?php
if(isset($_COOKIE['visits']))
{
    // 将cookie设置为过期
    setcookie('visits', '', time() - 1);
}
header('location:6.php');
?>