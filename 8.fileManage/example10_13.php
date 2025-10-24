<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.13 PHP的文件操作</title>
</head>
<body>
	<h4>文件的复制与删除</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        $filecopy = "mydata/testcopy.txt";
        if (copy($file, $filecopy)) {
            echo "文件成功复制为".$filecopy.'<br/>';
        }
        $fdelet = "mydata/dir/test.txt.bak"; 
        if (copy($file, $fdelet)) {
            echo "文件成功复制为".$fdelet.'<br/>';
        }
        if (unlink($fdelet)) {
            echo '文件'.$fdelet.'被删除！';
        }        
        ?></p>
</body>
</html>