<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.9 处理MySQL查询结果集</title>
</head>
<body>
<h4>使用数组方式接收MySQL查询数据</h4><hr /><p>  
<?php
    require_once 'example9_4_connect.php';
    $query = "select * from student";
    $result = mysqli_query($link, $query);


    // 同时返回关联数组和索引数组,都有键
    // 就是0,1,2,3,studnet_id,studnet_no……的key到value都给你
    $row = mysqli_fetch_array($result);

    // 关联数组，键是字段名，student_id,student_no的key到value
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    // 索引数组,键是数字0,1,2
    //$row = mysqli_fetch_array($result,MYSQLI_NUM);

    // 这个就是与第一个一样的默认值
    //$row = mysqli_fetch_array($result,MYSQLI_BOTH);


    echo '<pre>';print_r($row);echo '</pre>';    


    mysqli_free_result($result);
    mysqli_close($link);
?></p>
</body>
</html>