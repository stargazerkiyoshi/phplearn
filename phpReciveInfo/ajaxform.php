<?php
////ajax get参数接收
//$username=$_GET['username'];
////echo 111;//也会被返还
//$age=$_GET['age'];
//
////ajax里返还数据是通过输出；所有输出都会返还
////echo 222;
//$data['username']=$username;
//$data['age']=$age;
////print_r($data);
//echo json_encode($data);

//ajax 的post参数接收

//转存上传的文件
if(!empty($_FILES["img"])){
	if(is_uploaded_file($_FILES["img"]["tmp_name"])){
		move_uploaded_file($_FILES["img"]["tmp_name"],"3.jpg");
	}
	echo json_encode($_POST);
}
?>