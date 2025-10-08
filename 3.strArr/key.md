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
注意：正则表达式匹配是匹配字符串，而不是行匹配模糊过滤，处理的也是字符串
#### 基本字符匹配
```regex
.       : 单个任意
[]      : 括号内任意单个字符
[^ ]    : 除括号内任意单个
|       : 逻辑或; eg: cat|dog
```

#### 字符类
```regex

\d      : [0-9]
\D      : [^0-9]
\w      : [a-zA-Z0-9_]
\W      : [^a-zA-Z0-9_]
\s      : [\t\n \r\v\f]  匹配任意空白字符
\S      : [^\t\n \r\v\f] 
```
*空白字符*
```
# CR \r     : 回车
# LF \n     : 换行 
# CRLF \r\n
# \t        : tab制表符
# \f        : 换页符
# \v        : 垂直制表符
```

#### 定位符
```regex
^       : 行开头，^cat，cat开头的行
$       : 行结尾, cat$, cat结尾的行
\b      : 单词边界,\bcat, cat单词开头;cat\b,cat单词结尾;\bcat\b,cat这个单词
\B      : 非单词边界,\Bcat\B,在单词内,例acatm
```

#### 量词
```regex
*       : 匹配前面0-n次，a*也就是a{0,n}
+       : 匹配前面1次或多次,a+也就是a{1,n}
?       : 匹配前面0次或1次,a?也就是a{0,1}
{n}     : 匹配n次前面的元素
{n,}    : 匹配n次前面或者更多的元素
{n,m}   : 匹配n次到m次前面的元素
```
#### 贪婪匹配与非贪婪匹配
```regex
ab{3,}  : 默认贪婪匹配，有abbbbb，就不会只匹配前面的abbb
ab{3,}? : 非贪婪匹配, 有abbbbb, 只匹配说的至少3个就行abbb
```

#### 分组与引用
```regex
(abc)   : 把abc变成一个匹配整体，后面加量词也是整体，可以通过按顺序\n或$n来引用()匹配成功的内容
(?:abc) : 加了?:就不捕获了，就只是分组看做一个整体, 给量词使用或者
```

#### 旗帜
```regex
i       : /xxx/xxx/i 忽略大小写匹配
m       : /xxx/xxx/m 默认^$只匹配整个字符串(包括\n)的开头和结尾,加了m就可以匹配每行的
s       : /xxx/xxx/s 单行模式，也就是整体看做一个字符串，. 就会匹配包含\n换行符在内的所有字符
g       : /xxx/xxx/g 匹配文本中的所有实例，而不是只是每行的第一个;eg php中不支持g,用preg_match_all
```

#### 前瞻
```regex
cat(?=dog)  : 正，catdog的cat; eg: ?= 也就是dog等于的情况下前面的cat
cat(?!dog)  : 负, catcow的cat，后面不是dog的cat; eg: ?! 也就是dog不等于的情况前面的cat
```

#### 后顾
```regex
(?<=cat)dog  : 正，加了个<指后面，换过来了，cat匹配，就后面dog
(?<!cat)dog  : 负， cat不匹配，就后面的dog
```