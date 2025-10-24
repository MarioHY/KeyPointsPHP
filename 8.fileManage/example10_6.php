<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.6 PHP的目录操作</title>
</head>
<body>
	<h4>使用scandir()、glob()函数读取目录</h4>
	<hr />
    <p><?php
        $dir = "mydata/dir";
        // 使用scandir读取目录下是所有条目，返回一个索引数组
        $dirinfo1 = scandir($dir);        
        /*
            [0] => .
            [1] => ..
            [2] => test.txt
        
        */
        echo '<pre>';
        print_r($dirinfo1);
        echo '</pre>';
        


        // 通过glob()通过通配符提取mydata/dir/下的所有条目
        // 不包含.,..
        // glob一次性读取所有条目数组
        // 返回的是包含文件名路径的索引数组
        // $test = glob('mydata/dir/*'); 
        // echo '<pre>';
        // print_r($test);
        // echo '</pre>';

        foreach (glob('mydata/dir/*') as $file) {
            $dirinfo2[] = $file;
        }
        echo '<pre>';
        print_r($dirinfo2);
        echo '</pre>';
        ?></p>
</body>
</html>