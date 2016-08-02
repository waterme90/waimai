<?php
if(!$con=mysql_connect("localhost","root","")){
	die("connect error!");
}
if(!mysql_select_db("test")){
	die("select error!");
}
mysql_query("set names 'utf8'");
echo "<head>";
echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
echo "</head>";
session_start();
$username=$_SESSION["loginname"];
$pas=$_SESSION["password"];
$state=$_SESSION["state"];
if($state!=1 ||!isset($username)||!isset($pss)){
	echo "<script>alert(\"您尚未登录！请先登录！\");</script>";
	//header("location:login.php","target='_check'");
	echo "<script>window.history.go(-1);</script>";
	exit();
}
if(!authenticateUser($con,$username,$pas)){
	echo "<script>alert(\"您还未登录！请先登录！\");</script>";
	//header("location:login.php","target='_check'");
	echo "<script>window.history.go(-1);</script>";
	exit();
}

//认证用户是否登陆
function authenticateUser($con,$loginname,$loginpassword){
	$sql="select username,password from customer where username='{$loginname}' and password='{$loginpassword}'";
	if(!$re=mysql_query($sql)){
		echo "query error!";
	}
	if(mysql_num_rows($re)!=1){
		return false;
	}else 
	return true;
}
?>