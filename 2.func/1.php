<?php
    /*
        include "header.php" : 文件载入此处
        include_once "header.php" : 文件载入此处，除非已经被载入
        require "header.php" : 将文件载入此处，如果文件丢失则停止程序
        require_once "header.php"
        require_once("header.php")
    */

    # 函数内声明及可使用全局变量
    # global $doYouLikeWhatYouSee; // 全局变量

    function greeting($name="lucy")
    {
        print "Hello". " ". $name. "\n";
    }

    greeting();
    greeting("bob");
    greeting("alice");

    echo "<br/>";
    echo "<hr/>";

    function reality(&$realthing)
    {
        $realthing = $realthing * 3;
    }
    $val = 10;
    reality($val);
    echo "Triple = $val\n";

    echo "<br/>";

    if(function_exists("reality"))
    {
        echo "Function exist";
    }
    else{
        echo "Function does not exist";
    }

    echo "<br/><br/>";
    echo "<hr/>";

    phpinfo(); // 打印PHP安装的内部配置和信息
?>