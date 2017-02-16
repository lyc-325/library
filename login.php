<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php  
header("Content-type:text/html;charset=UTF-8");  
?> 
<title>后台管理-登陆</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="login">
<div id="wrapper-top">
  <h1>网上书店管理</h1>
</div>
<div id="wrapper-login"> 
<form action="#" method="post" id="loginform" name="loginform">
<div class="notification corner6">欢迎登陆，请输入用户名和密码</div>
<p><label class="loginlable" for="username">用户名</label>
<input type="text" name="username" id="username" class="corner6" />
</p>
<p><label for="password" class="loginlable">密码</label>
<input type="password" name="password" id="password" class="corner6"/>
</p>
<P class="alignright">
<input type="checkbox" name="remember" id="remember" />
<label for="remember">记住登陆状态</label>
</P>
<P class="alignright">
<input type="submit"  value="登陆" class="buttom corner4"/>
</P>

</form>
<?php  
@$name=$_POST['username'];  
@$pwd=$_POST['password'];  
if($name != "" && $pwd !="")  
{  
	include "config.php";
	$sql="select * from userinfo where username='$name' and password='$pwd'";  
	$result=$pdo->query($sql);
	$result->execute(); 
	foreach ($pdo->query($sql) as $row)
	{
		$name=$row['name'];
		echo  $name;
		session_start();
		// store session data
		$_SESSION['views']=$name;
	}
	if($result->fetchColumn() >0 ){ 	
	echo "<script language=\"javascript\">";
    echo "document.location=\"http://localhost/admin/main.php\"";
    echo "</script>";
 			return;
 			} 
 		else
 		{
 		echo "用户".$name."不存在"; 
 			return;
 } 
}  
?>  


</div>
</body>
</html>
