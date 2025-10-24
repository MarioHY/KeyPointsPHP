<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.7 PHP的文件操作</title>
</head>
<body>
	<h4>文件信息查询</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        // 判断是否为文件，返回true或false
        if (!is_file($file)) {
            echo '该名称表示的不是有效文件！';
            exit();
        }
        // dir or file
        echo '文件类型为: '.filetype($file).'<br/>';
        echo '文件大小: '.filesize($file).' bytes<br/>';


        // access time 访问时间, 返回的是时间戳
        $fileatime = fileatime($file);        
        echo '最后访问时间是: ';
        echo date("Y-m-d H:i:s",$fileatime).'<br/>';

        // modify time 修改时间
        $filemtime = filemtime($file);
        echo '最后修改时间是: ';

        // 权限
        echo date("Y-m-d H:i:s",$filemtime).'<br/>';
        $fileperms = fileperms($file);
        echo '文件的访问权限为: '.$fileperms.'<br/>';     
        ?></p>
</body>
</html>