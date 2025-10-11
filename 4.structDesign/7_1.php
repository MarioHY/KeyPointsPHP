<?php
    $items = array(
        array('id'=>'1', 'name'=>'PHP Web 应用开发教程', 'price' => '50'),
        array('id'=>'2', 'name'=>'面向对象程序开发', 'price' => '40'),
        array('id'=>'3', 'name'=>'Visual C++程序设计', 'price' => '30'),
        array('id'=>'4', 'name'=>'数据结构与应用程序', 'price' => '35')
    );

    session_start();


    if(isset($_SESSION['cart']))
    {
        $cart = array();
        $total = 0;
        foreach($_SESSION['cart'] as $id)
        {
            foreach($items as $product)
            {
                if($product['id'] == $id)
                {
                    $cart[] = $product;
                    $total += $product['price'];
                    break;
                }
            }
        }
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
    <h3>您的购物车</h3>
    <?php if(count($cart) > 0): ?>
    <table>
        <thead>
            <tr><th>商品名称</th><th>价格(元)</th></tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price']; ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <td>总计:</td>
                <td><?php echo $total; ?></td>
            </tr>
        </tfoot>
    </table>

    <?php else: ?>
    <p>您的购物车为空</p>
    <?php endif;?>

    <form action="7.php" method="post">
        <p>
            <a href="7.php">继续购物</a>&nbsp;&nbsp;或者&nbsp;&nbsp;
            <input type="submit" name="action" value="清空购物车"/>
        </p>

    </form>
    
</body>
</html>