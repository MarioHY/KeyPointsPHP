
## key
### 注释
```php
# 
//
/* */
```

### 数据类型
```php
标量：int, float, boolean, string
复合：array, object
特殊：资源类型(file,mysql...), NULL, 回调(Callable)类型

string . type = string + string
string(num) + int = num + int
string(noNum) + int = int + error
string(firstNum+noNum+...(...)) + int = firstNum + int
int + boolean = int + (0/1)

NULL: undefined, =null,=NULL, (unset)$x3

```

### 常量
```php
# 1. define
define("PI", 3.1415926); // 定义
constant('PI') // 使用

# 2.const
const PI = 3.1415926; // 定义
PI // 使用
```

### 变量
```php
// 变量
$var

// $$var 的含义是 $var 的值作为另一个变量的名称。
// 也就是两次取值，类似shell的$($(key))
$$var

// 例如
<?php
$a = "b";
$b = "c";
$c = "d";
echo $$$a; // 输出: d (解析顺序为 $$a -> $b -> $c)
?>
```

### 算术
```php
 2 ** 3 = 2的3次方

 $str .= 'China' == $str . 'China'
```

### 关系
```php
== : 值相等就行
=== : 值和类型都要相等

!= : 值不同true
!== : 值和类型而者有一个不同就是true

<=> : 比较返回三种，小于-1,等于0,大于1

?? : 从左到右找出第一个不为NULL的进行返回(返回的是值)，都为NULL则为NULL
```

### 逻辑
```php
&& and,|| or, ! not
```
### 位运算符
```php
& : 按位与，有0则0
| : 按位或，有1则1
^ : 按位异或，不同为1，同为0
~ : 按位取反，1变0,0变1
<< : 左移
>> : 右移
```

### 特别一点的
```php

// 执行运算符
`cmd` // 在终端执行命令
// 类型运算符(对象object)
$obj instanceof A; # 判断$obj是否属于A类
// 错误抑制运算符
@var_dump($test); //加上@的不将错误信息显示在页面上，



? : :
var_dump(); // 查看变量类型
settype($x, int) // 显式转换变量类型

// 数组，仅演示,一下三种结果相同
$arr = array(1,2,3)

$arr[]=1;
$arr[]=2;
$arr[]=3;

$arr = array("0"=>1, "1" => 2);
$arr["2"] = 3;

print_r($arr); // 输出显示数组
```


