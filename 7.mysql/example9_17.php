<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.17 使用PDOStatement类的execute()方法执行查询</title>
</head>
<body>
<h4>使用PDOStatement::execute()方法执行查询</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    //$query = "insert into student values (null,:sno,:sname,:stel)";
    $query = "insert into student values (null,?,?,?)";    
    $stmt = $pdo->prepare($query);    
    /* $stmt->bindParam(':sno', $sno);
    $stmt->bindParam(':sname', $sname);
    $stmt->bindParam(':stel', $stel); */
    $stmt->bindParam(1, $sno);
    $stmt->bindParam(2, $sname);
    $stmt->bindParam(3, $stel);
    $sno = '20160001';
    $sname = '赵 四';
    $stel = '13123456789';
    $stmt->execute();
    $sno = '20160002';
    $sname = '赵五';
    $stel = '13123456788';
    $stmt->execute();    
?>
</body>
</html>