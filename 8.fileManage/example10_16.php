<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例10.16 PHP的文件上传</title>
</head>
<body>
	<h4>多文件上传</h4>
	<hr /><p>
    <?php 
    foreach ($_FILES['file']['tmp_name'] as $key=>$tmpName) {
        if(empty($tmpName)){
            echo '文件'.$key.'为空！';
    }else {
        if($key == 0){
            echo '上传文件信息: <hr/>';
            print_r($_FILES);
            echo '<hr/>';
        }
        $fileName = $_FILES['file']['name'][$key];
        if (file_exists("mydata/".$fileName)) {
            echo $fileName.'文件已经存在！';
        }else {
            move_uploaded_file($_FILES['file']['tmp_name'][$key],
                                "mydata/".$fileName);
            }
        }}?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>"
        method="post" enctype="multipart/form-data" >
        <label>请选择要上传的文件: </label>
        <input type="file" name="file[]" id="file1"/>
        <input type="file" name="file[]" id="file2"/>
        <input type="file" name="file[]" id="file3"/>
        <input type="submit" name="sumbit" value="上传">
    </form>      
</body>
</html>