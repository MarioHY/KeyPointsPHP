<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.13 使用MySQL准备语句</title>
</head>
<body>
<h4>使用MySQL准备语句</h4><hr />  
<?php
    require_once 'example9_6_connect.php';    
    // 使用？？？占位符替代实际要插入的值
    $query = "insert into student values (null,?,?,?)";
    // 初始化准备语句对象
    $stmt = $link->stmt_init();
    //$stmt = $link->prepare($query);
    // 提前编译sql语句，后续执行只需要传入占位符的值，提高重复执行效率
    $stmt->prepare($query);
    $sno = null;
    // 绑定变量参数，sss指3个参数都是字符串类型,s:string,i=integer,d=double)
    $stmt->bind_param('sss', $sno, $sname, $stel);
    $sno = '20170010'; $sname = '梦林'; $stel = '12345678';
    // 将变量赋值并执行
    $stmt->execute();
    $sno = '20170011'; $sname = '梦夕'; $stel = '123456789';
    // 执行新的变量
    $stmt->execute();
    $query = "select * from student";

    // 创建新的准备语句对象并绑定查询sql
    $stmt = $link->prepare($query);
    // 执行
    $stmt->execute();

    $sid = null;
    // 绑定结果变量
    $stmt->bind_result($sid, $sno, $sname, $stel);    
    echo '<table border="1" width="100%" rules="all">'.
        '<caption>学生信息</caption>'.'<tr>'.'<th>学号</th>'.
        '<th>姓名</th>'.'<th>联系方式</th>'.'</tr>';
    // 循环获取赋值绑定变量
    while($stmt->fetch()){
        echo '<tr><td>'.$sno.'</td>';
        echo '<td>'.$sname.'</td>';
        echo '<td>'.$stel.'</td></tr>';}
    echo '</table>';
    $stmt->close();
    $link->close();    
?>
</body>
</html>