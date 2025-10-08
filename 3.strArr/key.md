## 字符串与数组

---

### 字符函数
#### 1.访问单个字符
```php
$string = 'Chinese Dream';
$char = $string[1]; // 为第二个，h
```

#### 2.字符串长度
```php
strlen($string);
```

#### 3.大小写转换
```php
strtolower($string); // 转换为小写
strtoupper($string); // 转换为大写
```

#### 4.去除首尾空格及特殊字符
```php
# 返回处理完后的字符串
trim($string); # 去除首尾空格\t特殊字符

rtrim($string); # 只去除右边的的

ltrim($string); # 只去除左边的的
```

#### 5.翻转字符串顺序
```php
strrev($string); # 翻转
```

#### 6.重复字符串
```php
str_repeat("ab", 3); # ababab
str_repeat("test", 0); # 空
```

#### 7.字符填充
```php
// 右填充空格直到大小为10
str_pad($str, 10); 

// 左填充直到字符串长度为6，填充内容为0
str_pad($str, 6, "0", STR_PAD_LEFT); 

// 左右两侧填充，尽可能均匀，直到15
// "****center*****"
str_pad($str, 15, "*", STR_PAD_BOTH); 

// 如果总长度大于设定长度，则不变返回
// ……
```

#### 8.分解字符串
```php
$str = "apple,banana,orange,grape";
$fruits = explode(",", $str);
print_r($fruits);
/* 输出：
Array
(
    [0] => apple
    [1] => banana
    [2] => orange
    [3] => grape
)
*/
```
```php
$str = "a,b,c,d,e";

// $limit=3：最多返回 3 个元素
$arr1 = explode(",", $str, 3);
print_r($arr1); // Array ( [0] => a [1] => b [2] => c,d,e )

// $limit=-2：排除最后 2 个元素
$arr2 = explode(",", $str, -2);
print_r($arr2); // Array ( [0] => a [1] => b [2] => c )

// $limit=0：等价于 1
$arr3 = explode(",", $str, 0);
print_r($arr3); // Array ( [0] => a,b,c,d,e )
```

#### 10.合并字符串
```php
$nums = [1, 2, 3, 4];
$str = implode($nums); // 等价于 implode("", $nums)
echo $str; // 输出：1234
```
```php
$lines = ["第一行", "第二行", "第三行"];
// 用换行符连接（适合多行文本）
$str = implode("<br/>", $lines);
echo $str;
/* 输出：
第一行
第二行
第三行
*/
```
```php
$user = [
    "name" => "Alice",
    "age" => 25,
    "city" => "Beijing"
];
// 只拼接值，键名被忽略
$str = implode(" | ", $user);
echo $str; // 输出：Alice | 25 | Beijing
```

#### 字符串截取
```php
$str = "Hello World";

// 从索引 6 开始（第 7 个字符），截取 5 个字符
echo substr($str, 6, 5); // 输出：World

// 从索引 0 开始，截取 5 个字符
echo substr($str, 0, 5); // 输出：Hello
```
```php
$str = "PHP is fun";

// 从索引 4 开始，截取到末尾
echo substr($str, 4); // 输出：is fun

// 从索引 0 开始，截取到末尾（即返回原字符串）
echo substr($str, 0); // 输出：PHP is fun
```
```php
$str = "abcdefgh";

// 从末尾第 3 个字符开始（即索引 5 的 'f'），截取到末尾
echo substr($str, -3); // 输出：fgh

// 从末尾第 5 个字符开始（索引 3 的 'd'），截取 2 个字符
echo substr($str, -5, 2); // 输出：de
```

#### 11.字符串查找
```php
$str = "Hello, PHP World!";

// 查找 "PHP" 首次出现的位置
$pos = strpos($str, "PHP");
echo $pos; // 输出：7（"PHP" 从索引 7 开始）

// 查找 "o" 首次出现的位置
$pos = strpos($str, "o");
echo $pos; // 输出：4
```
```php
$str = "apple, banana, orange, apple";

// 从索引 10 开始，查找 "apple" 首次出现的位置
$pos = strpos($str, "apple", 10);
echo $pos; // 输出：27（第二个 "apple" 的位置）
```
```php
$str = "Hello World";

// 查找不存在的子串 "xyz",返回是false，要用===判断避免与0混淆
$pos = strpos($str, "xyz");
if ($pos === false) {
    echo "子串未找到";
} else {
    echo "子串位置：{$pos}";
}
```

####  12.字符串替换
```php
$str = "I like apple.";
// 将 "apple" 替换为 "banana"
$newStr = str_replace("apple", "banana", $str);
echo $newStr; // 输出：I like banana.
```
```php
$str = "Hello, PHP! PHP is great.";
// 替换数组中的多个子串："PHP"→"Python"，"great"→"awesome"
$newStr = str_replace(["PHP", "great"], ["Python", "awesome"], $str);
echo $newStr; // 输出：Hello, Python! Python is awesome.
```
```php
$str = "red, red, blue, red";
$count = 0;
// 替换 "red" 为 "green"，并统计次数
$newStr = str_replace("red", "green", $str, $count);
echo $newStr . "\n"; // 输出：green, green, blue, green
echo "替换次数：" . $count; // 输出：替换次数：3
```






### 正则表达式
基本字符匹配
```
.      : 单个任意
[]     : 括号内任意单个字符
[^ ]   : 除括号内任意单个
|      : 逻辑或; eg: cat|dog
```

