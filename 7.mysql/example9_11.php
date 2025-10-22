<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.11 处理MySQL查询结果集</title>
</head>
<body>
<h4>使用对象方式接收查询数据</h4><hr />  
<?php
    require_once 'example9_4_connect.php';
    $query = "select * from student";
    $result = mysqli_query($link, $query);
    
    // 读取一行内容，转换为一个php对象，key为属性，属性的值为value
    $row = mysqli_fetch_object($result);
    //$row = $result->fetch_object();
    echo $row->student_no.'&nbsp;&nbsp;';
    echo $row->student_name.'&nbsp;&nbsp;';
    echo $row->student_tel.'&nbsp;&nbsp;';
    
    mysqli_free_result($result);
    mysqli_close($link);
?>
</body>
</html>