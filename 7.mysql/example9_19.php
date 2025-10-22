<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.19 使用fetch()方法获取查询数据</title>
</head>
<body>
<h4>使用fetch()方法获取查询数据</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    $query = "select * from student";
    $stmt = $pdo->query($query);    
    echo '<table border="1" width="100%" rules="all">'.
        '<caption>学生信息</caption>'.'<tr>'.'<th>学号</th>'.
        '<th>姓名</th>'.'<th>联系方式</th>'.'</tr>';
    $row = $stmt->fetch(PDO::FETCH_NUM);
    while($row){
        list($sid, $sno, $sname, $stel) = $row;
        echo '<tr><td>'.$sno.'</td>';
        echo '<td>'.$sname.'</td>';
        echo '<td>'.$stel.'</td></tr>';
        $row = $stmt->fetch(PDO::FETCH_NUM);
    }
        echo '</table>';        
?>
</body>
</html>