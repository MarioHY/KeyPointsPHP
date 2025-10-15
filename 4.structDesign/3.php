<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>接受文件上次数据</title>
</head>
<body>
    <h4>接受用户图像上传数据</h4><hr/>
    <?php
        echo '<pre>';
        // 通过$_FILES获取上传文件信息, print_r打印变量的结构和内容
        print_r(value: $_FILES) ;
        echo '</pre>';
    ?>
</body>
</html>