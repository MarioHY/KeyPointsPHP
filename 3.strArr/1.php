<?php
    echo "hello";
    echo "<br/>";

    print "hello";
    echo "<br/>";
    printf("hello");
    # sprintf, 将格式的字符串传入到变量
    echo "<br/>";

    print_r(true); // 智能的输出传入的参数，不能输出PHP的NULL类型，输出true也是为1
    echo "<br/>";

    var_dump(true); // 能输出全部PHP数据
?>