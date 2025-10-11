<?php 
    $items = array(
        array('id'=>'1', 'name'=>'PHP Web 应用开发教程', 'price' => '50'),
        array('id'=>'2', 'name'=>'面向对象程序开发', 'price' => '40'),
        array('id'=>'3', 'name'=>'Visual C++程序设计', 'price' => '30'),
        array('id'=>'4', 'name'=>'数据结构与应用程序', 'price' => '35')
    );
    session_start();
    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
    }

    if(isset($_POST['action']) && $_POST['action'] == '购买' )
    {
        $_SESSION['cart'][] = $_POST['id'];
    }

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
        table{border-collapse: collapse;}
        td,th{border: 1px solid black; text-align: center;}
    </style>
</head>
<body>
    <p>您的购物车包含<?php echo count($_SESSION['cart']);?>项商品!</p>
    <?php if (count($_SESSION['cart'])!= 0):?>
    <p><a href="7_1.php?cart">显示我的购物车</a></p>
    <?php else: ?>
    <p>请选购商品</p>
    <?php endif; ?>
    
    <table>
        <thead>
            <tr><th>商品名称</th><th>价格(元)</th></tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item):?>
                <tr>
                    <td><?php echo $item['name'];?></td>
                    <td><?php echo $item['price'];?></td>
                    <td>
                        <form action="" method="post">
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