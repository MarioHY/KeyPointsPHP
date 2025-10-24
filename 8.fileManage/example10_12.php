<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.12 PHP的文件操作</title>
</head>
<body>
	<h4>向文件中添加数据</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        $str = "再次添加文字到文件。";
        echo '待添加的文本是: '.$str;
        file_put_contents($file, $str, FILE_APPEND);
        echo '<hr />';
        $farr = file($file);
        foreach ($farr as $str) {
            echo $str.'<br />';
        }
        ?></p>
</body>
</html>