<?php
header('Content-Type: text/html; charset=utf-8');
$uploaddir = null;
$uploaddir .="uploadfiles/".date("Y")."/".date("m")."/".date("d")."";
if (!is_dir($uploaddir))
{
	if (!mkdir($uploaddir, 0777,TRUE) || !chmod($uploaddir, 0777))
	{
		exit("创建上传目录失败");
	}
}
/* if($_FILES["filename"])
{
	$filename = addslashes($_FILES['filename']["name"]);//客户端文件名

	$arrTemp = explode(".",$filename);//取后缀

	$filename_sever = date("his").rand(100,999);

	$filename_sever .= ".".$arrTemp[count($arrTemp)-1];

	if(move_uploaded_file($_FILES['s_photo']['tmp_name'],$uploaddir."/".$filename_sever)){

	}else{
		exit("上传失败");
	}
} */
////////上传文件////////////
if(isset($_POST["sub"])){
//$upfile="./upload_file/".$_FILES["file"]["name"];
$name=time();//定义变量，保存图片名，以防图片的名字相同
echo $name;
$name.=strrchr($_FILES["picture"]["name"],".");//上传文件的名称
echo $name;
$num=rand(1,10);
$type=$_FILES["picture"]["type"];
$size=$_FILES["picture"]["size"];
$tmp_name=$_FILES["picture"]["tmp_name"];
if($_FILES["picture"]["error"]>0){
echo "上传文件有误:".$_FILES["picture"]["error"]."<br/>";
}else{
echo "上传文件名为：".$name."<br>";
echo "上传文件类型为：".$type."<br>";
echo "上传文件大小为：".($size/1024)."<br>";
echo "上传到：".$tmp_name."<br>";
if(file_exists("../$uploaddir/$name")){
echo "已经存在";
}else{
if(move_uploaded_file($tmp_name,"./$uploaddir/$name")){
echo $name."上传成功";
//获取表单数据

$bookname=$_POST['bookname'];
$jieshao=$_POST['jieshao'];
$price=$_POST['price'];

$n=strlen($bookname);

$i=strlen($jieshao);

$z=strlen($price);

if($n==0){

	echo "请输入书名";

}elseif($i==0){

	echo "请输入简介";

}elseif($z==0){

	echo "请输入价格";

}else{	

	include "config.php";
	$query="insert into book (bookname,jieshao,picture,price,flag) values ('$bookname','$jieshao','$uploaddir/$name','$price','0')";
	$result=$pdo->prepare($query);
	$result->execute();
	if($result)
	{
		echo "<script language=\"javascript\">";
		echo "document.location=\"http://localhost/admin/add-book.php\"";
		echo "</script>";
		return;
	}
	else
	{
		echo '保存失败!';	
	
	}

}	


//上传结束
}else{
echo $name."上传失败";
}
}
}
}


?>