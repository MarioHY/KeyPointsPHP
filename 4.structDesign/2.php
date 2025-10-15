<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    action：指定表单提交后，数据发送到哪个页面处理
    $_SERVER['PHP_SELF']是 PHP 的超全局变量，代表 “当前页面的路径”，
    所以意思是 “表单提交到当前页面自己处理”（不用跳转到其他页面）。 
    method="post"指定表单提交的方式为POST，提交的数据不会显示在URL
    -->
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="username"/>
    <input type="submit" value="提交"/>
   </form>
   <?php if(isset($_POST['username']))
   {?>
    <hr/>
    <p>您的输入是: <?php echo $_POST['username'] ?></p>
   <?php } ?>
</body>
</html>