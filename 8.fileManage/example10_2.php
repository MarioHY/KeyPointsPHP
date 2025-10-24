<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.2 PHP的目录操作</title>
</head>
<body>
	<h4>查看目录名称</h4>
	<hr />
    <p><?php
        $filename = "mydata/dir/test.txt";
        // 提取$filename 中文所在的目录路径,例如mydata/dir
        // 方便查看目录路径提取结果,这个是获得dir路径，
        // 原来是相对的返回的也是目录相对的
        $dirname = dirname($filename);
        var_dump($dirname);        
        echo '<br/><br/>';

        // 获得绝对路径
        $path = realpath(path: $filename);
        // dirname在提取绝对路径中的绝对目录路径
        var_dump(dirname($path));        
        echo '<br/><br/>';

        // 使用dir打开$dirname,也就是mydata/dir目录，返回一个目录对象
        $objDir = dir($dirname);        
        // 获得目录的象path属性, 如果原本是相对的，返回的也是相对的
        var_dump($objDir->path); 
        echo '<pre>';

        // 解析绝对路径$path，返回一个关联数组信息
        $fileinfo = pathinfo($path);
        // dirname ---> 绝对目录路径
        // basename ---> 文件名test.txt
        // extension ---> 文件后缀txt
        // filename ---> 文件名test
        var_dump($fileinfo);
        echo '</pre>';        
        
    ?></p>
</body>
</html>