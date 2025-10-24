<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.4 PHP的目录操作</title>
</head>
<body>
	<h4>删除目录</h4>
	<hr />
    <p><?php
        // rmdir只能删除空目录
        $dir = "mydata/dir/sub1";
        rmdir($dir);

        $dir = "depth1/depth2/depth3/";
        rmdir($dir);

        $dir = "depth1";
        rmdir($dir);
        ?></p>
</body>
</html>