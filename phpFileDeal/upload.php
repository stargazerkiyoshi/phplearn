<?php
//接收文件及数据
//接收数据
$username=$_POST['username'];
//echo $username;
//存储文件：把临时文件夹里的内容转存到指定服务器目录里
//print_r($_FILES);

//自动创建文件夹来存储上传的文件
if(!file_exists("uploads")){
	mkdir("uploads");
}
if(!file_exists("uploads/".date("Y-m-d",time()))){
	mkdir("uploads/".date("Y-m-d",time()));
}

//判断是否有文件上传
if(is_uploaded_file($_FILES['img']['tmp_name'])){
	//有文件上传；
	//提取后缀名称；
//	print_r(pathinfo($_FILES['img']["name"]));
	$extension=pathinfo($_FILES['img']["name"])['extension'];
	$path="uploads/".date("Y-m-d",time())."/".randName(6).".".$extension;
	move_uploaded_file($_FILES['img']['tmp_name'], $path);
	echo "姓名是：{$username};<br /> <img src={$path}>";
}

function randName($num){
	$str="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789";
	$sStr="";
	for($i=0;$i<$num;$i++){
		$sStr .= $str[mt_rand(0, strlen($str)-1)];
	}
	return $sStr;
}
?>