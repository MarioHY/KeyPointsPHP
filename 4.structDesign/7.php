<?php 
    // 定义一个二维矩阵存储所有商品的信息
    $items = array(
        array('id'=>'1', 'name'=>'PHP Web 应用开发教程', 'price' => '50'),
        array('id'=>'2', 'name'=>'面向对象程序开发', 'price' => '40'),
        array('id'=>'3', 'name'=>'Visual C++程序设计', 'price' => '30'),
        array('id'=>'4', 'name'=>'数据结构与应用程序', 'price' => '35')
    );
    // 启动或者恢复当前用户会话
    // 服务器端通过session保存用户操作记录
    // 就是说，客户端不存cookie了，服务端存。但是客户端存访问该服务端
    // 生成的会话ID，每次访问通过cookie就发送这个id就行，服务器通过id
    // 就能识别这是同一个用户，找到保存的用户数据，就是存在$_SESSION
    session_start();
    // $_SESSIOn存储当前用户的会话数据
    if(!isset($_SESSION['cart']))
    {
        // 如果用户第一次访问，就是初始化为一个空数组
        $_SESSION['cart'] = array();
    }
    //如果点击购买了，表单通过POST提交，这个提交按钮的名字是action哈哈
    // 且值为购买（按钮的value是“购买”
    if(isset($_POST['action']) && $_POST['action'] == '购买' )
    {
        //$_POST['id']是表单传送的商品id（隐藏字段传递的)
        //数组末尾添加，例如买了2， [1,2]
        $_SESSION['cart'][] = $_POST['id'];
    }
    // 清空矩阵，不unset避免后续继续用报错
    if(isset($_POST['action']) && $_POST['action'] == '清空购物车')
    {
        // unset($_SESSION['cart']);
        $_SESSION['cart'] = array();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
         /* 表格边框合并，避免边框重叠出现双条线 */
        table{border-collapse: collapse;}
         /* 内容居中 */
        td,th{border: 1px solid black; text-align: center;}
    </style>
</head>
<body>
    <!-- count计算数组长度，也就是购物数量 -->
    <p>您的购物车包含<?php echo count($_SESSION['cart']);?>项商品!</p>
    <!-- 如果购物车不为0，则显示我的购物车 -->
    <?php if (count($_SESSION['cart'])!= 0):?>
    <p><a href="7_1.php?cart">显示我的购物车</a></p>
    <?php else: ?>
    <!-- 否则显示请购物商品的提示 -->
    <p>请选购商品</p>
    <?php endif; ?>
    
    <!-- 表格标签 -->
    <table>
        <!-- 表头 -->
        <thead>
            <!-- 表头行 -->
            <tr><th>商品名称</th><th>价格(元)</th></tr>
        </thead>
        <!-- 表格主体 -->
        <tbody>
            <!-- 遍历商品数组，显示 -->
            <?php foreach ($items as $item):?>
                <tr>
                    <td><?php echo $item['name'];?></td>
                    <td><?php echo $item['price'];?></td>
                    <td>
                        <!-- 表单提交到当前页面 -->
                        <form action="" method="post">
                            <!-- 隐藏字段，用于传递当前商品id，用户看不到按钮，提交表单会有 -->
                            <div>
                                <input type="hidden" name="id" value="<?php echo $item['id'];?>"/>
                                <input type="submit" name="action" value="购买"/>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    
</body>
</html>