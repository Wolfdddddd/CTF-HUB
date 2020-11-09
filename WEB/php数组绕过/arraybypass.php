<?php
header('Content-type:text/html;charset=utf-8');
error_reporting(0);
$flag='flag{1145141919!}';
$temp = @$_GET['password'];
is_numeric($temp)?die("不可以输入数字哦!"):NULL;
if($temp>114514) {
    echo $flag;
}
$php='
<?php
$flag="xxx";
$temp = @$_GET["password"];
is_numeric($temp)?die("不可以输入数字哦!"):NULL;
if($temp>114514) {
    echo $flag;
}
?>'
;

highlight_string($php);
?>