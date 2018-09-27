<?php
	//php5.5及以下的mysql函数
	//php5.5以上的用mysqli函数链接
	//链接数据库
	$link=mysqli_connect("localhost", "root", "root", "0703", 3306);
	//如果有错误抛出错误
	if(mysqli_connect_errno($link)){
		var_dump(mysqli_connect_error($link));
	}
	
//	//增加
//	$sql="INSERT INTO users (username,pwd,age) VALUES ('周伟伟','123',29)";
//	
//	//设置编码格式
//	//方式一
//	mysqli_set_charset($link, "utf8");
//	//方式二
////	mysqli_query($link, "set names utf8")
//	//执行sql语句
//	$res=mysqli_query($link, $sql);
//	if($res&&mysqli_affected_rows($link)){
//		echo "添加成功";
//	}else{
//		echo "添加失败";
//	}
//	
//	//删除
//	//sql语句
//	$sql="DELETE FROM users WHERE id=9";
//	//执行sql语句；
//	$res=mysqli_query($link, $sql);
//	if($res && mysqli_affected_rows($link)){
//		echo "删除成功";
//	}else{
//		echo "删除失败";
//	}
//	
//	
//	//更新
//	$sql="UPDATE users SET username='zww' WHERE id=10";
//	//执行sql语句
//	$res=mysqli_query($link, $sql);
//	if($res && mysqli_affected_rows($link)){
//		echo "更新成功";
//	}else{
//		echo "更新失败";
//	}
//	
	
//查询；
$sql="SELECT * FROM users";
//执行sql，获得结果集；
$res=mysqli_query($link, $sql);
//通过结果集获取结果
//$arr=mysqli_fetch_array($res);
while($arr=mysqli_fetch_assoc($res)){
	$sarr[]=$arr;
}
echo "<pre>";
print_r($sarr);
echo "</pre>";
?>