<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style type="text/css">
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <h4>使用配置文件中的数据</h4>
    <?php
        $config = parse_ini_file('config/config.ini', true);
        echo '<pre>';
        print_r($config);
        echo '</pre>';
    ?>
    <hr/>
    <h3><?php echo $config['project']['name']?></h3>
    <img src="<?php echo $config['project']['logo1']?>" />
    <img src="<?php echo $config['project']['logo2']?>" />
</body>
</html>