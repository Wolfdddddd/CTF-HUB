<?php
header('Content-type:text/html;charset=utf-8');
error_reporting(0);
$content = '<?php exit(0);?>';
$content .= @$_GET['code'];
$filename = @$_GET['filename'];
if (isset($filename)){
    file_put_contents($filename, $content);
}else{
    echo "猪在山里针不戳!";
}

$php='
<?php
$content = "<?php exit(0);?>";
$content .= @$_POST["code"];
$filename = @$_POST["filename"];
if (isset($filename)){
    file_put_contents($filename, $content);
}else{
    echo "猪在山里针不戳!";
}

//flag在根目录.
?>';
highlight_string($php);
?>