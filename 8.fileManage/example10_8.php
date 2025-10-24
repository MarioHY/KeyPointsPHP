<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.8 PHP的文件操作</title>
</head>
<body>
	<h4>文件的打开与关闭</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        $fp = fopen($file, 'r');
        if ($fp === false) 
        {
            exit("不能打开文件{$file}!");
        }
        else
        {
            echo "打开文件{$file}成功!<br/>";
        }

        $fc = fclose($fp);
        if ($fc) 
        {
            echo "文件{$file}关闭成功!<br/>";
        }
        else
        {
            echo "文件{$file}关闭失败!";
        }



        $url = "http://localhost/test/8.fileManage/"
              ."example10_7.php";
        $up = fopen($url, 'r');
        if ($up=== false) 
        {
            exit("不能打开{$url}页面!");
        }
        else
        {
            echo "打开{$url}页面成功!";
            echo fread($up, 1024);
        }
        if (fclose($up)) 
        {
            echo "远程文件{$url}关闭成功!";
        }
        else
        {
            echo "远程文件{$url}关闭失败!";
        }
        ?>
    </p>
</body>
</html>