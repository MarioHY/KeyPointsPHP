<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.11 PHP的文件操作</title>
</head>
<body>
	<h4>写入数据到文件</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        $str = "添加这些文字到文件。\n";
        if (is_writable($file)) {
            if (!$fp = fopen($file, 'a')) {
                echo "不能打开文件 ${filename}!";
                exit;
            }
            if (fwrite($fp, $str) === FALSE) {
                echo "不能写入到文件 ${filename}!";
                exit;
            }
            echo "成功地将[{$str}]写入到文件{$file}!";
            fclose($fp);
        }else {
            echo "文件 {$file}不可写!";
        }
        echo '<hr />';
        $farr = file($file);
        foreach ($farr as $str) {
            echo $str.'<br />';
        }
        ?></p>
</body>
</html>