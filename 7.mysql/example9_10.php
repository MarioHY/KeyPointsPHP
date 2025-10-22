<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.10 处理MySQL查询结果集</title>
</head>
<body>
<h4>使用数组方式接收查询数据[对象格式]</h4><hr />  
<?php
    require_once 'example9_6_connect.php';
    $query = "select * from student";
    $result = @$link->query($query);
    //$row = $result->fetch_array();//关联、索引
    //$row = $result->fetch_array(MYSQLI_ASSOC); // 关联
    //$row = $result->fetch_array(MYSQLI_NUM);//索引
    //$row = $result->fetch_array(MYSQLI_BOTH);//关联、索引
    //$row = $result->fetch_row();//索引
    //$row = $result->fetch_assoc();// 关联

    $row = $result->fetch_all(); // 所有行数据，默认索引
    //$row = $result->fetch_all(MYSQLI_ASSOC); // 所有的关联数组 
    //$row = $result->fetch_all(MYSQLI_NUM); //所有的索引
    //$row = $result->fetch_all(MYSQLI_BOTH); //所有的混合
    echo '<pre>';print_r($row);echo '</pre>';
    $result->free();
    $link->close();
?>
</body>
</html>