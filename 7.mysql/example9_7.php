<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.7 修改MySQL数据表中的数据</title>
</head>
<body>
<h4>修改MySQL数据表中的数据</h4><hr />  
<?php
    // 引用数据库连接文件
    require_once 'example9_6_connect.php';
    // 定义SQL语句
    $query = "update student set student_tel='13276543200' 
                    where student_id='2'";
    //  执行sql语句，用mysqli对象的query方法
    $link->query($query);
    // 获取
    $result = $link->query("select * from student");
    //result是结果集对象，如果查询失败，result就是false不是对象
    if($result){
        // 就是取一行查询到的结果
        $row = $result->fetch_row();//返回索引数组
        // 从结果集中读取第一行数据
        // 不为null，说明没到头，提取该行数据数组
        while ($row){
            // list就是php的类似python能快速把值赋值给多个变量
            list($id,$sid,$name,$tel) = $row;
            printf("%s -- %s -- %s<br/>",$sid,$name,$tel);

            // 读取下一行，准备下一次循环
            $row = $result->fetch_row();
        }
    }
    // 释放结果集
    $result->free();
    $link->close();
?>
</body>
</html>