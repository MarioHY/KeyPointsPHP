<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.3 PHP的目录操作</title>
</head>
<body>
	<h4>创建目录</h4>
	<hr />
    <p><?php
        // 要求mydata/dir已存在，否则报错
        $newdir = "mydata/dir/sub1";
        mkdir($newdir);

        $newdir = "depth1";
        mkdir($newdir);

        // 0表默认权限，第三个参数表示递归创建
        $newdir = "depth1/depth2/depth3/";
        mkdir($newdir, 0, true);        
        ?></p>
</body>
</html>