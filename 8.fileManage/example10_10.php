<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.10 PHP的文件操作</title>
</head>
<body>
	<h4>读取整个文件</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        readfile(filename: $file);
        echo '<hr />';

        // 读取整个文件内容，按“换行符”分割为索引数组
        $farr = file($file);
        foreach ($farr as $str) 
        {
            echo $str.'<br />';
        }
        echo '<hr />';
        // 读取整个文件内容，并将其作为单个字符串返回
        $fileStr = file_get_contents($file);
        echo $fileStr;
        ?></p>
</body>
</html>