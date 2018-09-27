<?php
$data=json_encode($_POST);
$res=file_put_contents("data.txt", $data);
if($res){
	echo "储存成功";
}else{
	echo "储存失败";
}
?>