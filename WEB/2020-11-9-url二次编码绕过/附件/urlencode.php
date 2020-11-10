<?php
header('Content-type:text/html;charset=utf-8');
error_reporting(0);
if(@eregi("XXXCTF",@$_GET[id])) {
    echo("参数输入错误！");
    exit();
}
@$_GET[id] = urldecode(@$_GET[id]);
if(@$_GET[id] == "XXXCTF")
{
    echo "回答正确!";
    echo "flag{lbwnb}";
}
//?id=%2558%2558XCTF


$php='
<?php
if(@eregi("XXXCTF",@$_GET[id])) {
    echo("参数输入错误！");
    exit();
}
@$_GET[id] = urldecode(@$_GET[id]);
if(@$_GET[id] == "XXXCTF")
{
    echo "回答正确!";
    echo "flag{xxx}";
}
?>
';
highlight_string($php);

?>

<!--</font> </div></br></br></br><center>-->
<!--<a href="1.phps">源码</a>-->
