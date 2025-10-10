<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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