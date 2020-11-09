<?php
//定义字符
header('Content-type:text/html;charset=utf-8');

function Image($filename){
      $types = '.jpeg|.png|.gif|.jpg|.phtml';
    if(file_exists($filename)){
        $info = getimagesize($filename);
        $ext = image_type_to_extension($info[2]);
        if(stripos($types,$ext)>=0){
            return $ext;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

$a = 0;

if(isset($_POST['btn'])){
    $file = $_FILES['image']['tmp_name'];
    $res = Image($file);
    if(!$res){
        $a = 2;
        echo '图片大小请不要超过2MB';
    }else{
$file = $_FILES['image'];
if (is_uploaded_file($file['tmp_name'])) {

    if (move_uploaded_file($file['tmp_name'], 'img\\' . $file['name'])) {
        $a =1;
        echo '保存成功';
        } else {
                $a = 3;
                echo '文件类型错误,请只传图片!';
            }
        }

}}

?>

    <div id="upload_panel" >
                <form enctype="multipart/form-data" method="post">
                        <input class="input_file" type="file" name="image"/>
                        <input class="button" type="submit" name="btn" value="上传"/>

                </form>
        </div>
<div id="img">
                    <?php
                    if($a == 1){
                        echo '<img src="img\\'.$file['name'].'" width="350px" />';
                        echo '<br/>','';
                    } ?>
</div>
    </div>
