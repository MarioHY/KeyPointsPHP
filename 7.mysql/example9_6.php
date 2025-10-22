<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.6 向MySQL数据表中插入数据</title>
</head>
<body>
<h4>向MySQL数据表中插入数据</h4><hr />  
<?php
    require_once 'example9_6_connect.php';
    $query = "insert into student values 
                    (null,'20180004','李子','13676543789')";
    mysqli_query($link, $query);
    $query = "select * from student";
    $result = mysqli_query($link, $query);

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