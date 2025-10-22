<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.14 创建PDO对象</title>
</head>
<body>
<h4>创建PDO对象并测试</h4><hr />  
<?php
    require_once 'example9_14_pdo.php';
    // 获取数据库服务器的版本信息
    $version = $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
    // 获取当前php配置中支持的所有pdo数据库驱动,例如MySql，sqlitek
    $driver = $pdo->getAvailableDrivers();
    //输出第一个驱动名称，
    echo $driver[0].'&nbsp;&nbsp;';
    echo $version;    
?>
</body>
</html>