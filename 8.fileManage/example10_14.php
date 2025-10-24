<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.14 PHP的文件操作</title>
</head>
<body>
	<h4>文件的移动与重命名</h4>
	<hr />
    <p><?php
        $file = "mydata/dir/test.txt";
        $renameFile = "mydata/dir/newtest.txt";
        $moveFile = "mydata/newtest.txt";
        if (rename($file, $renameFile)) {
            echo '文件重命名成功!<br/>';
        }else {
            echo '文件重命名失败!';
        }
        if (file_exists($renameFile)) {
            if (rename($renameFile, $moveFile)) {
                echo '文件移动成功!';
            }else {
                echo '文件移动失败!';
            }
        }else {
            echo '要移动的文件不存在!';
        }
        ?></p>
</body>
</html>