## 控制结构与函数

### 选择结构
```php
if
elseif
……
else

switch ()
{
    case value:  ;break;
    case value:  ;break;
    ……
    default: 
}
```
### 循环结构
```php
while()
{}

do{}
while();

for(;;)
```
### 流程控制
```php
break

continue

goto str;
str:

exit // 强制退出代码的执行
```
### 函数的参数传递
```php
# 形参
function swap(int $a, int $b);
# 实参
function swap(int &$a, int &$b):void {……}
# 函数参数，也就是回调函数 
function sum($fun, int $n){$fun(1, 2)……}
```
### 作用域
```php
# 函数内
局部变量
# 函数外
全局变量
{global $x; $x +=1;} # 通过加global来使用函数外的全局变量

# 函数内静态变量
静态变量
{static $x=0;} # 只初始化一次
```

### 常用函数
```php
# 获取时间日期
array getdate([int timestamp])
today = getdate();
echo '<pre>'; # pre是原本不动的标签
print_r($today);
echo '</pre>';

# 设置时间时区
$timezone = date_default_timezone_get();
echo $timezone;
ddate_default_timezone_getate_defa('Asia/Shanghai');
$today = getdate();
echo '<pre>'; # pre是原本不动的标签
print_r($today);
echo '</pre>';

# 格式化本地日期与时间
$today = date("Y-m-d H:i:s");
echo '现在是：<br/><br/>'.$today.'<br/><br/>';

$today = date("Y年m月d日");
echo '<br/><br/>'.$today.'<br/><br/>';


$today = date("H点i分s秒");
echo '<br/><br/>'.$today.'<br/><br/>';

# 获取当前时间戳
$today = time();

# 将日期转换为时间戳(Unix)
# 2017-7-15-13:47:50 (date +%F-%H:%M:%S)
$birthday = mktime(13, 47, 50, 7 , 15, 2017);
$today = time();
$age = floor(($today - $birthday)/(365 * 24 * 60 * 60));
```

