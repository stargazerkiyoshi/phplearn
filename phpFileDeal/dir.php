<?php
	
	//mvc model view controller
	
	//目录操作；
	//创建目录
//	if(!file_exists("222")){
//		$res=mkdir("222");
//		if($res){
//			echo "目录创建成功";
//		}else{
//			echo "目录创建失败";
//		}
//	}
	
	//读取目录;方式一
//	$handle=opendir("1111/22/./.");
//	$res1=readdir($handle);
//	$res2=readdir($handle);
//	$res3=readdir($handle);
//	$res4=readdir($handle);
//	
//	echo $res1."<br>".$res2."<br>".$res3."<br>".$res4;

	//通过循环读取；
//	while($res=readdir($handle)){
//		echo $res."<br>"	;
//	}

	//文件读取方式二 目录内所有的dir组成的数组
//	$arr=scandir("1111");
//	print_r($arr);

	//修改文件名；
//	$res=rename("1111/22", "1111/333");
//	if($res){
//		echo "修改成功";
//	}else{
//		echo "修改失败";
//	}

	//删除文件夹:只能删除空文件夹；
//	$res=rmdir("333");
//	if($res){
//		echo "删除成功";
//	}else{
//		echo "删除失败";
//	}

	//查找文件夹里内容；如果是文件直接删除；如果是文件夹继续递归查找；最后再删除最外层文件夹就可以了
	
//	function myrmdir($path){
//		$i=0;
//		$handle=opendir($path);
//		while($filename=readdir($handle)){
//			$i++;
//			if($i>2){
//				if(is_dir($filename)){
//					myrmdir($path."/".$filename);
//				}else if(is_file($filename)){
//					unlink($filename);
//				}
//			}else {
//				rmdir($path);
//			}
//			
//		}	
//	}
//	myrmdir("1111");

	function removeDir($src){
		$arr=scandir($src);
		for($i=2;$i<count($arr);$i++){
			//判断是文件或者是文件夹；
			
			$path=$src."/".$arr[$i]; //组装路径
			if(is_file($path)){
				//判断是文件，直接删除；
				unlink($path);
			}else{
				//是文件夹；
				removeDir($path);
			}
		}
		return rmdir($src);//删除最外层目录
	}
//	$res=removeDir("1111");
//	if($res){
//		echo "删除成功";
//	}else{
//		echo "删除失败";
//	}

	//获取文件内容大小
//	$res=filesize("3.txt");
//	echo $res;
	
	date_default_timezone_set('Asia/Shanghai');
//	//修改时间；不仅是修改内容，还有修改权限
//	$ctime=filectime("3.txt");
////	echo $ctime;
//	echo date("Y-m-d H:i:s",$ctime);

	//上次的访问时间
	$atime=fileatime("3.txt");
	echo date("Y-m-d H:i:s",$atime);
	echo "<br>";
	
	//最后的内容修改时间（不包括权限修改）
	$mtime=filemtime("3.txt");
	echo date("Y-m-d H:i:s",$mtime)."<br>";
	
	//判断文件是否可读；
	$res=is_readable("3.txt");
	var_dump($res);
	echo "<br>";
	//判断文件是否可写
	$res=is_writable("3.txt");
	var_dump($res);
	echo "<br>";
	
	//获取路径里的文件名称；
	$path="test/test1/111/index.php";
	$res=basename($path);
	echo $res."<br>"	;
	$arr=explode(".", $res);
	echo $arr[count($arr)-1]."<br>";
	
	//获取路径名称；
	$dirPath=dirname($path);
	echo $dirPath."<br>";
	
	//获取路径里的详细信息
	$res=pathinfo($path);
	print_r($res);
	
	//chmod:修改权限，只能修改通过代码创建的文件
	if(!file_exists("111")){
		$res=mkdir("111");
		if($res){
			echo "创建成功";
		}else{
			echo "创建失败";
		}
	}
	//权限 1：可执行 2：可写 4：可读
	
	$res=chmod("111",0777);
	if($res){
		echo "修改权限成功";
	}else{
		echo "修改权限失败";
		
	}
?>