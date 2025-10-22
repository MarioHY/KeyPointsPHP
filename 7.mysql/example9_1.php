<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.1 连接MySQL数据库</title>
</head>
<body>
<h4>连接MySQL</h4><hr />	<p>  
<?php
    try 
    {
        $link1 = mysqli_connect();
        echo '函数方法，默认参数：'.mysqli_get_server_info($link1);
        echo '<br/>';
    }catch(Exception $e)
    {

    }



    $link2 = mysqli_connect("localhost","root","root");
    echo '函数方法，自带参数：'.mysqli_get_server_info($link2);
    echo '<br/><br/>';



    $link3 = new mysqli("localhost","root","root"); 
    echo '对象方法，构造函数：'.$link3->get_server_info();
    echo '<br/>';



    $link4 = new mysqli();
    $link4->connect("localhost","root","root");
    echo '对象方法，成员函数【自带参数】：';
    echo $link4->get_server_info();
    echo '<br/>';



    try
    {
        $link5 = new mysqli();
        $link5->connect();
        echo '对象方法，成员函数【默认参数】：';
        echo $link5->get_server_info().'<br/><br/>';
    }
    catch(Exception $e)
    {

    }
?></p>
</body>
</html>