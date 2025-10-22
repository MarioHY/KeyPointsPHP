<?php
    $dsn = "mysql:dbname=test_students;host=localhost";
    $user = 'root';
    $pwd = 'root';
    try {
        $pdo = new PDO($dsn,$user,$pwd);
    } catch (PDOException $e) {
        echo '数据库连接失败：'.$e->getMessage();
        exit();
    }
?>