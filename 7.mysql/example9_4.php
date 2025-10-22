<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.4 使用MySQL连接文件</title>
</head>
<body>
<h4>使用MySQL连接文件</h4><hr /><p>  
<?php
    require_once 'example9_4_connect.php';
    $query = "show tables";
    $result = mysqli_query($link, $query);

    echo '<pre>';
    print_r($result);
    echo '</pre>';

    // 存成二维数组
    $rows = mysqli_fetch_all($result);
    echo '<pre>';
    print_r($rows);
    echo '</pre>';
    // 释放结果集占用的内存
    mysqli_free_result($result);
    // 关闭mysql连接
    mysqli_close($link);
?></p>
</body>
</html>