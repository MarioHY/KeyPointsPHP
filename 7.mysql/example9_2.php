<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.2 获取连接MySQL错误信息</title>
</head>
<body>
<h4>获取连接的错误信息</h4><hr />	<p>  
    <?php
        $link = @mysqli_connect("127.0.0.1","root","123");
        $errno = mysqli_connect_errno();
        $error = mysqli_connect_error();
        var_dump($errno);
        echo '<br/>';
        print_r($error);
        echo '<br/><br/>';



        $link = @new mysqli("127.0.0.1","root","123");
        $errno = $link->connect_errno;
        $error = $link->connect_error;
        var_dump($errno);
        echo '<br/>';
        print_r($error);        
    ?></p>
</body>
</html>