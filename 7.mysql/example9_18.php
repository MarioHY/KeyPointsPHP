<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.18 使用数组方式输入查询数据</title>
</head>
<body>
<h4>使用数组方式输入查询数据</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    //$query = "insert into student values (null,:sno,:sname,:stel)";
    $query = "insert into student values (null,?,?,?)";
    $stmt = $pdo->prepare($query);
    //$stmt->execute(array(":sno"=>'20150001',":sname"=>'刘一',":stel"=>'02187654377'));
    //$stmt->execute(array(":sno"=>'20150002',":sname"=>'刘二',":stel"=>'02187654378'));
    $stmt->execute(array('201500011','刘一','02187654377'));
    $stmt->execute(array('201500021','刘二','02187654378'));
?>
</body>
</html>