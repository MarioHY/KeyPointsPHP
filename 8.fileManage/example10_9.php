<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.9 PHP的文件操作</title>
</head>
<body>
	<h4>读取文件中的一个或一行字符</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        // r只读，b二进制模式，避免不同系统 
        $fp = fopen($file, 'rb');
        if ($fp === false) 
        {
            exit("文件不能打开!");
        }
        // fgetc逐字符提取提取文件
        $char = fgetc($fp);
        while ($char !== false) 
        {
            if ($char == "\n") 
            {
                echo '<br/>';
            }
            else 
            {
                echo $char;
            }            
            $char = fgetc($fp);
        } 
        fclose($fp);   

        echo '<hr />';

        // die与exit功能类似，终止脚本
        $fp = fopen($file, 'rb') or die("不能打开文件！");
        // 只要没到文件末尾，就持续执行循环
        while (!feof($fp)) 
        {
            $str = fgets($fp,100);
            echo $str.'<br/>';
        }
        fclose($fp);  
        ?>
    </p>
</body>
</html>