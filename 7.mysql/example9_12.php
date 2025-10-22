<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.12 处理MySQL查询结果集</title>
</head>
<body>
<h4>从结果集中获取记录数及受影响的行数</h4><hr />  
<?php
    require_once 'example9_6_connect.php';
    $query = "select * from student";
    $result = $link->query($query);
    //$num = mysqli_num_rows($result);    
    $num = $result->num_rows;
    //$num = mysqli_affected_rows($link);
    //$num = $link->affected_rows;
    echo '<table border="1" width="100%" rules="all">'.
        '<caption>学生信息</caption>'.'<tr>'.'<th>学号</th>'.
        '<th>姓名</th>'.'<th>联系方式</th>'.'</tr>';
    while ($num){
        $row = $result->fetch_object();
        echo '<tr><td>'.$row->student_no.'</td>';
        echo '<td>'.$row->student_name.'</td>';
        echo '<td>'.$row->student_tel.'</td></tr>';
        $num--;
    }
    echo '</table>';
    $sql = "update student set student_tel='123456'".
                " where student_tel is null";
    $res = $link->query($sql);    
    if($res) echo '成功修改'.$link->affected_rows.'条学生信息！'; 
    $result->free();
    $link->close();    
?>
</body>
</html>