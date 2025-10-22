<?php
    // 创建mysqli类实例，用于后续数据库操作
    $link = new mysqli();
    // 连接数据库服务器,@用于屏蔽错误
    @$link->connect("localhost","root","root");
    // connnect_errno不为0，表示有错误，就可以进行下面的and，提示输出并终止程序
    $link->connect_errno and die('数据库服务器连接失败！');
    // 选择要操作的数据库
    @$link->select_db("test_students");
    $link->errno and die('打开数据库失败！');
?>