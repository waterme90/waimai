<?php
if(!$con=mysql_connect("localhost","root","")){
	die("connect error!");
}
//$username=mysqlclean()
if(!mysql_select_db("test")){
	die("select error!");
}
mysql_query("set names 'utf8'");
echo "<head>";
echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
echo "</head>";
session_start();
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
$username=$_POST['username'];
$password=$_POST['psd'];
/*if(authenticateUser($con,$username,$password)){
	$_SESSION["loginname"]=$username;
	$_SESSION["password"]=$password;
	//注册开启这个session的iP
	$_SESSION["loginIP"]=$_SERVER["REMOTE_ADDR"];//干啥的？
	$_SESSION["message"]="认证通过！合法用户！"
	//重定向
	//header("location:../shopping/index.php");
	//echo "<script>window.location.href=\"../shopping/index.php\"</script>";
	//exit();
}*/
//用户未登录则登录
	$sql="select username,password from customer where username='{$username}' and password='{$password}'";
	$res=mysql_query($sql);
	
	$isLogin=0;
	if(mysql_num_rows($res)==1){
		$isLogin=1;
	}
	if($isLogin){//用户已注册则存入session
		$_SESSION["loginname"]=$username;
		$_SESSION["password"]=$password;
		$_SESSION["state"]=1;//如果用户登陆则将用户状态变为1
		echo "<script>window.history.go(-1);</script>";
	}else{
		
		echo "<script>alert(\"您还未注册！请先注册！\");</script>";
		echo "<script>window.location.href=\"../reginster/reginster.php\"</script>";
	}
 //echo mysql_field_len($res,0);
	//header("location:login.php")
	//exit();

?>