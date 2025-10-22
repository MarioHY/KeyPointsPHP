<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.3 处理MySQL连接错误</title>
</head>
<body>
<h4>处理MySQL连接错误</h4><hr /><p>  
    <?php
        $link = @mysqli_connect("127.0.0.1","root","wwp");
        $errno = mysqli_connect_errno();
        $error = mysqli_connect_error();
        if ($errno) {
            echo '连接MySQL失败！【'.$error.'】';
            exit();
        }else {
            try {
                $link = @new mysqli("127.0.0.1","root","123");
                if($link->connect_errno)
                    throw new mysqli_sql_exception();  
            } catch (mysqli_sql_exception $e) {
                echo '连接MySQL失败！'.$e.'<br/>'; 
            }
            echo '继续执行后续代码...';
        }        
    ?></p>
</body>
</html>