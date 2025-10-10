<?php
if(isset($_COOKIE['visits']))
{
    setcookie('visits', '', time() - 1);
}
header('location:6.php');
?>