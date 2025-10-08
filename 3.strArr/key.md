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


### php正则表达式函数
#### 1.字符串匹配函数
`preg_match()`
```php

$str = "Email: user1@test.com, Phone: 123-456, Email: user2@example.com";

// 匹配第一个邮箱地址（正则：简单匹配邮箱格式）
$pattern = '/\w+@\w+\.\w+/';
$isMatched = preg_match($pattern, $str, $matches);

echo "是否匹配：" . $isMatched . "\n"; // 输出：1（匹配成功）
echo "第一次匹配结果：" . $matches[0]; // 输出：user1@test.com
```

`preg_match_all()`
```php
$str = "Email: user1@test.com, Phone: 123-456, Email: user2@example.com";

// 匹配所有邮箱地址
$pattern = '/\w+@\w+\.\w+/';
$total = preg_match_all($pattern, $str, $matches);

echo "匹配总次数：" . $total . "\n"; // 输出：2
echo "所有匹配结果：\n";
print_r($matches[0]); 
// 输出：
// Array (
//   [0] => user1@test.com
//   [1] => user2@example.com
// )
```
`带()分组的匹配`
```php
<?php
$str = "Name: Alice (Age:25), Name: Bob (Age:30)";

// 正则：匹配 "Name: 姓名 (Age:年龄)"，分组提取姓名和年龄
$pattern = '/Name: (\w+) \(Age:(\d+)\)/';

// 1. preg_match()：只提取第一个匹配的分组
preg_match($pattern, $str, $m1);
echo "第一次匹配的分组：\n";
print_r($m1);
// 输出：
// Array (
//   [0] => Name: Alice (Age:25)  // 完整匹配
//   [1] => Alice                // 第一个分组（姓名）
//   [2] => 25                   // 第二个分组（年龄）
// )

// 2. preg_match_all()：提取所有匹配的分组（按分组维度存储）
preg_match_all($pattern, $str, $m2);
echo "所有匹配的分组：\n";
print_r($m2);
// 输出：
// Array (
//   [0] => Array ( [0] => Name: Alice (Age:25), [1] => Name: Bob (Age:30) )  // 所有完整匹配
//   [1] => Array ( [0] => Alice, [1] => Bob )                                // 所有第一个分组
//   [2] => Array ( [0] => 25, [1] => 30 )                                    // 所有第二个分组
// )
?>
```
**另一种存放方式**
```php
假如(\d+)-(\d+) 匹配字符串 2024-11 2025-09

# preg_match_all($regex, $html, $matches, PREG_SET_ORDER)
PREG_SET_ORDER:
[
    [0 => '2024-11', 1 => '2024', 2 => '11'],  // 第一个完整匹配项及捕获组
    [0 => '2025-09', 1 => '2025', 2 => '09']   // 第二个完整匹配项及捕获组
]

PREG_PATTERN_ORDER(默认):
[
    [0 => '2024-11', 1 => '2025-09'],  // 所有完整匹配项
    [0 => '2024', 1 => '2025'],        // 所有第一个捕获组
    [0 => '11', 1 => '09']             // 所有第二个捕获组
]
```


#### 2.字符串搜索和替换函数
`preg_replace()`

基本替换
```php
$str = "Hello 123, World 456!";

// 替换所有数字为 "*"
$pattern = '/\d+/'; // 匹配一个或多个数字
$replacement = '*';
$newStr = preg_replace($pattern, $replacement, $str);

echo $newStr; // 输出：Hello *, World *!
```
多模式替换
```php
$str = "Name: Alice, Age: 25, Email: alice@test.com";

// 模式数组：匹配姓名、年龄、邮箱的标识
$patterns = ['/Name: /', '/Age: /', '/Email: /'];
// 替换数组：对应移除各标识
$replacements = ['', '', ''];

$newStr = preg_replace($patterns, $replacements, $str);
echo $newStr; // 输出：Alice, 25, alice@test.com
```
分组引用
```php
$str = "Alice (25), Bob (30)";

// 正则：匹配 "姓名 (年龄)"，分组捕获姓名和年龄
$pattern = '/(\w+) \((\d+)\)/';
// 替换为 "年龄：年龄，姓名：姓名"（引用分组）
$replacement = '年龄：$2，姓名：$1';

$newStr = preg_replace($pattern, $replacement, $str);
echo $newStr; // 输出：年龄：25，姓名：Alice, 年龄：30，姓名：Bob
```

#### 3.字符串拆分函数
`preg_split()`

基本
```php
$str = "apple   banana\torange\npear"; // 包含多个空格、制表符、换行

// 正则：\s+ 匹配一个或多个空白字符
$arr = preg_split('/\s+/', $str);
print_r($arr);
/* 输出：
Array
(
    [0] => apple
    [1] => banana
    [2] => orange
    [3] => pear
)
*/
```

拆分次数限制
```php
$str = "a,b,c,d,e";

// 按逗号拆分，但最多拆分为 3 个元素
$arr = preg_split('/,/', $str, 3);
print_r($arr);
/* 输出：
Array
(
    [0] => a
    [1] => b
    [2] => c,d,e  // 剩余部分作为最后一个元素
)
*/
```
拆分并过滤空元素
```php
$str = "test,,example,,demo"; // 包含连续逗号（会产生空元素）

// 按逗号拆分，不过滤空元素（默认）
$arr1 = preg_split('/,/', $str);
print_r($arr1);
/* 输出（含空元素）：
Array ( [0] => test [1] => [2] => example [3] => [4] => demo )
*/

// 过滤空元素（添加 PREG_SPLIT_NO_EMPTY 标志）
$arr2 = preg_split('/,/', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($arr2);
/* 输出（无空元素）：
Array ( [0] => test [1] => example [2] => demo )
*/
```
保留拆分的分隔符
```php
$str = "hello123world456php";

// 正则：匹配数字（用分组捕获分隔符）
$pattern = '/(\d+)/'; 
// 拆分并保留分隔符（数字）
$arr = preg_split($pattern, $str, -1, PREG_SPLIT_DELIM_CAPTURE);

print_r($arr);
/* 输出：
Array
(
    [0] => hello
    [1] => 123      // 第一个分隔符（数字）
    [2] => world
    [3] => 456      // 第二个分隔符（数字）
    [4] => php
)
*/
```

#### 4.正则表达式转义
`preg_quote()`

就是说我要将匹配3.5*2这个字符串，但是作为正则表达式会将.*等字符作为量词，在进行之前又不想手动转义太麻烦，这个函数解决问题
```php
$target = "3.5*2"; // 包含 . 和 *（正则特殊字符）
$str = "The result is 3.5*2, not 3*5.2";

// 直接用 $target 作为正则会出错（. 和 * 被当作元字符）
// 正确做法：先用 preg_quote() 转义
$pattern = '/'.preg_quote($target).'/'; 

preg_match($pattern, $str, $matches);
echo $matches[0]; // 输出：3.5*2（正确匹配）
```

#### 5. 数组过滤函数
`preg_grep()`

也就是说把数组的每个元素当做每一行进行模糊过滤，可以看做linux的grep，只留下包含匹配的元素(行)
```php
$arr = ["apple123", "banana", "orange45", "grape", "678mango"];

// 正则：匹配包含至少一个数字的字符串（\d+ 表示一个或多个数字）
$pattern = '/\d+/';
// 筛选所有包含数字的元素
$matchedArr = preg_grep($pattern, $arr);

print_r($matchedArr);
/* 输出（键名与原数组一致）：
Array
(
    [0] => apple123
    [2] => orange45
    [4] => 678mango
)
*/
```
反向筛选
```php
$arr = ["user1@test.com", "abc123", "admin@example.com", "xyz789"];

// 正则：匹配邮箱格式（简单匹配，包含 @ 和 .）
$pattern = '/@.+\./';
// 反向筛选：返回非邮箱格式的元素
$unmatchedArr = preg_grep($pattern, $arr, PREG_GREP_INVERT);

print_r($unmatchedArr);
/* 输出：
Array
(
    [1] => abc123
    [3] => xyz789
)
*/
```


### 数组
```
分类:
索引数组(数字做标)
关联数组(有一个不是数字做下标的，例如字符串)
```

#### 1. 直接赋值
```php
$arr1[] = 1;
$arr1[] = 2;
$arr1[] = 3;
// 0->1,1->2,2->3

$arr2[3] = 4;
$arr2[] = 5;
$arr2[10] = 6;
// 3->4,4->5,10->6

$arr3[] = ['1',2, NULL, true];
// 0->string(1), 1->2,2->NULL,3->bool(true)
```
#### 2. array()赋值
```php
$arr1 = array(1,2,3);
$arr2 = array(3=>4, 5, 10=>6);
$arr3 = array('1', 2, NULL, true);
$arr4 = array(
    "name"=> '清华大学出版社',
    "address" => '中国北京',
    "star"=>'五星A级'
);
```

#### 3. range()函数方式
```php
$arr1 = range(1, 4);
$arr2 = range('a', 'g');
$arr3 = range('1', '4', 2);
// 0->1, 1->3
$arr4 = range('a', 'g', 3)
```
### 4.list()方式
```php
$file = 'example.txt';
$fp = fopen($file, 'r');
if($fp === false)
{
    exit();
}
while(!feof($fp))
{
    $line = fgets($fp);
    $str = explode('/', trim($line));
    list($stuNo[], $stuName[], $stuPhone[]) = $str;
}
fclose($fp);
```


### 数组的操作

#### 数组的测试
`is_array()`

```php
$isArray=is_array($arr1); //返回boolean
```

#### 数组的大小
`count()`

```php
$arr1=range(1,100);
$arr2=array(array(1,2,3), array(4,5,6));

count($arr1);// 返回数组元素个数,100
count($arr2); //返回数组元素第一层个数, 2
count($arr2, COUNT_RECURSIVE); //递归,8
```

#### 数组的遍历
```php
// 遍历student数组下的key为class，值为stu(数组)
foreach ($student as $class => $stu)
{
    // 遍历该班级stu数组，学生值为info(数组)
   foreach ($stu as $info) 
   {
        // $value学生的各个信息数据
        foreach($info as $value)
        {

        }
   }
}
```

#### 数组的操作
```php
array_unshift($arr, 1); //数组头部插入1
array_push($arr, 2);//尾部添加2
array_shift($arr);//删除头元素
array_pop($arr);//删除尾元素

array_keys($arr);//返回$arr的key数组
array_values($arr);//返回$arr的value数组
```

#### 数组其他操作
```php
array_merge_recursive($arr1, $arr2); //返回合并$arr1与$arr2合并后的数组

asort($arr1); //根据$arr1的值进行字符串排序
```
`array_slice`
```php
$fruits = ["apple", "banana", "orange", "grape", "mango"];

// 从索引 1 开始，截取 3 个元素
$slice = array_slice($fruits, 1, 3);
print_r($slice);
/* 输出：
Array
(
    [0] => banana  // 原索引 1
    [1] => orange  // 原索引 2
    [2] => grape   // 原索引 3
)
*/
// 注：默认不保留原键名，新数组索引从 0 开始
```
`array_chunk`
```php
$fruits = ["apple", "banana", "orange", "grape", "mango", "kiwi"];

// 每个子数组最多包含 2 个元素
$chunks = array_chunk($fruits, 2);
print_r($chunks);
/* 输出：
Array
(
    [0] => Array ( [0] => apple [1] => banana )  // 2 个元素
    [1] => Array ( [0] => orange [1] => grape )  // 2 个元素
    [2] => Array ( [0] => mango [1] => kiwi )    // 2 个元素
)
*/
```


### 预定义数组
* _SERVER
* _ENV
* _GET和_POST
* _FILES
* _REQUEST
* _COOKIE
* _SESSION
* GLOBALS