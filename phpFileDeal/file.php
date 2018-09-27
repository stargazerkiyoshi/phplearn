<?php
	//文件操作；增  删  改  查；
	//1.文件操作；2、目录操作（文件夹操作）
	//文件操作；
	//文件读取；
//	$res=file_get_contents("1.txt");
//	echo $res;
	//方式一
	//爬取远程文件；动态网页静态化
	//file_get_contents("php://input");//获取xml或者原始的json
//	$res=file_get_contents("http://www.jingyingba.com/home/courselist/index/id/11/type/2.html");
//	echo $res;
//	$res=file_put_contents("jingying.html", $res);
//	if($res){
//		echo "获取成功";
//	}else{
//		echo "获取失败";
//	}

//	//方式二
//	//读取文件获取资源；
//	$handle=fopen("1.txt","r");
//	//var_dump($handle);
//	//通过资源获取文件里的内容；
//	$res=fread($handle, filesize("1.txt"));
//	echo $res;
//	fclose($handle);
	
//	//读取文件方式三
//	$handle=fopen("1.txt","r");
////	$res1=fgets($handle);
////	$res2=fgets($handle);
////	echo $res1,$res2;
//	//判断文件是否读取完毕feof；
//	while(!feof($handle)){
//		$res=fgets($handle);
//		echo $res;
//	}
	
//	//文件读取方式四
//	$res=file("1.txt");
//	print_r($res);
	
	//文件写入方式一；
	//读取资源
	//文件指针在开始会覆盖文件写入（不是创建）；指针在结尾就是追加写入；
//	$handle=fopen("3.txt","a");
//	$str="我是要写入3.txt里面的内容";
//	$res=fwrite($handle, $str);
//	if($res){
//		echo "写入成功";
//	}else{
//		echo "写入失败";
//	}
//	
//	//文件写入方式二
//	$res=file_put_contents("4.txt", "我是要写入到4.txt文件里的内容");
//	if($res){
//		echo "写入成功";
//	}else{
//		echo "写入失败";
//	}
//	
//	//删除文件；
//	//判断文件是否存在；如果存在删除；如果不存在不做任何事；
//	
//	if(file_exists("4.txt")){
//		$res=unlink("4.txt");
//		if($res){
//			echo "删除成功";
//		}else{
//			echo "删除失败";
//		}
//	}
	
//	//判断是否是文件
//	$res=is_file("1.txt");
//	var_dump($res);
//	
//	//判断是否是文件夹（目录）
//	$result=is_dir("1111");
//	var_dump($result);

//	//修改文件名；
//	rename("1.txt","5.txt");
//	if($res){
//		echo "修改成功";
//	}else{
//		echo "修改失败";
//	}
	
	//文件复制；
//	$res=copy("3.txt","8.txt");
//	if($res){
//		echo "复制成功";
//	}else{
//		echo "复制失败";
//	}
	
	//复制：先读取再写入的过程
	copy("3.txt","9.txt"	);
	function mycopy($src,$dest){
//		$fsrcefopen($src, "r");
//		$str=fread($fsource, filesize($src));
//		$fdest=fopen($dest,"w");
//		$bool=fwrite($fdest, $str);
		return file_put_contents($dest, file_get_contents($src));
	}
?>