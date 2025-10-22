<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.15 使用PDO类的exec()方法执行查询</title>
</head>
<body>
<h4>使用PDO::exec()方法执行查询</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    $query = "insert into student value ".
            "(null,'20170015','王一','15723645789')";
    $insert = $pdo->exec($query);
    if ($insert) {
        echo '成功插入'.$insert.'条记录！';
    }else {
        echo '数据插入失败：';
        print_r($pdo->errorInfo());
    }
?>
</body>
</html>