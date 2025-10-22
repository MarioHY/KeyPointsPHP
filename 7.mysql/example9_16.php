<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.16 使用PDO类的query()方法执行查询</title>
</head>
<body>
<h4>使用PDO::query()方法执行查询</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    $query = "select * from student";
    try {
        $result = $pdo->query($query);//返回的是结果集对象
        // 这个结果集可遍历，取的来d是关联数组k
        foreach ($result as $row) {
            echo $row['student_no'].'&nbsp;&nbsp;';
            echo $row['student_name'].'&nbsp;&nbsp;';
            echo $row['student_tel'].'<br/>';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    echo '<p>数据库中共有'.$result->rowCount().'条学生信息！</p>'; 
?>
</body>
</html>