<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.5 获取MySQL中的数据</title>
</head>
<body>
<h4>获取MySQL中的数据</h4><hr />  
<?php
    require_once 'example9_4_connect.php';
    $query = "select * from student";
	// 返回的是结构集对象，发送查收接受mysql查询到的数据暂时存起来，形成
	//一个结果集，通过$result拿去，$result更像一个指向数据的指针
    $result = mysqli_query($link, $query);
	//把 $result 这个结果集里的所有数据一次性取出来”，
	//并整理成 PHP 中容易操作的 “二维数组” 格式 
    $rows = mysqli_fetch_all($result);    
?>
	<table border="1">
    	<caption>学生信息</caption>
    	<tr><td>学号</td><td>姓名</td><td>联系方式</td></tr>
    	<?php foreach ($rows as $row){?>
    	<tr>
    		<td><?php echo $row[1]?></td>
    		<td><?php echo $row[2]?></td>
    		<td><?php echo $row[3]?></td>
		</tr>
    	<?php }?>
	</table>    

<?php
    mysqli_free_result($result);
    mysqli_close($link);
?>
</body>
</html>