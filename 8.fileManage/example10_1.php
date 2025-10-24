<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.1 PHP的目录操作</title>
</head>
<body>
	<h4>是否为目录</h4>
	<hr />
    <p><?php
        $filename = "mydata/dir";
        // 判断是否是目录，返回一个boolean值 
        $isDir = is_dir($filename); 
        var_dump($isDir);        
        ?></p>
</body>
</html>