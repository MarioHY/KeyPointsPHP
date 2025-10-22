<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.20 使用fetchAll()方法获取查询数据</title>
</head>
<body>
<h4>使用fetchAll()方法获取查询数据</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    $query = "select * from student";
    $stmt = $pdo->query($query);    
    echo '<table border="1" width="100%" rules="all">'.
        '<caption>学生信息</caption>'.'<tr>'.'<th>学号</th>'.
        '<th>姓名</th>'.'<th>联系方式</th>'.'</tr>';
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        echo '<tr><td>'.$row['student_no'].'</td>';
        echo '<td>'.$row['student_name'].'</td>';
        echo '<td>'.$row['student_tel'].'</td></tr>';
    }
    echo '</table>';        
?>
</body>
</html>