<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>例9.8 删除MySQL数据表中的数据</title>
</head>
<body>
<h4>删除MySQL数据表中的数据</h4><hr />  
<?php
    require_once 'example9_6_connect.php';
    $query = "delete from student where student_name='李子'";
    // 执行
    $del = @$link->query($query);
    // del!==false说明sql执行成功，影响行不为0，说明有数据被删除
    if(($del !== false) && ($link->affected_rows != 0)){
        $result = $link->query("select * from student");
        if($result){
            $row = $result->fetch_row();            
            while ($row){
                // 现在采用索引方式
                echo $row[1].'&nbsp;&nbsp;';
                echo $row[2].'&nbsp;&nbsp;';
                echo $row[3].'<br/>';
                $row = $result->fetch_row();
            }        
        }
        $result->free();
    }else{
        echo '<p style="color:red">删除数据失败！</p>';
    }    
    $link->close();
?>
</body>
</html>