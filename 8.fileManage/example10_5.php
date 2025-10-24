<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.5 PHP的目录操作</title>
</head>
<body>
	<h4>打开、读取、关闭目录</h4>
	<hr />
    <p><?php
        $dirname = "mydata/dir";
        // 打开指定目录，返回一个目录句柄
        $dirhandle = opendir($dirname);
        // 使用readdir通过句柄读取目录中的第一个条目，直到读取到false，即没有
        $file = readdir($dirhandle);
        while ($file !== false) {
            echo $file.'<br/>';
            $file = readdir($dirhandle);
        }
        // 关闭目录句柄
        closedir($dirhandle);        
        ?></p>
</body>
</html>