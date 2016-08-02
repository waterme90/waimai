<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>登陆网络订餐系统</title>

	<style>
	li{list-style: none;}
	.loginform{  width: 90%;
  		height: 439px;
  		/* position: absolute; */
  		background-image: url(../../image/login2.jpg);
  		margin: 0 auto;}
 	.form{
 		margin-left: 40%;
 	}
	.input{height: 33px;
  		width: 202px;}
  	.loginform_ul{float: right;
		width: 300px;
		height: 228px;
		background: rgb(78, 166, 190);
		margin-top: 9%;
		margin-right: 96px;}
  .loginform_li{ 
  		margin-top: 20px;}
  	.loginform_user{  float: left;width: 100%;
  color: white;
  display: block;}
  .loginform_button{
  	  width: 60px;
  height: 30px;
  background: rgb(16, 81, 155);
  border: none;
  font-size: 12px;
  color: white;
    font-weight: 600;
      margin-left: 20px;
  }
</style>
</head>
<body>


<div id="loginform" class="loginform">
	
	<form action="logincheck.php" method="POST" onsubmit="checkuserRegerest()">
		<ul class="loginform_ul">
			<li class="loginform_li">
				<span class="loginform_user">用户名：</span><input class="input"type="text" name="username" >
			</li>
			<li class="loginform_li">
				<span class="loginform_user">密&nbsp码:</span><input class="input" type="password" name="psd">
			</li>
			<li class="loginform_li">
				<input class="loginform_button" type="submit" name="submit" value="确认">
				<input class="loginform_button" type="reset" name="reset" value="重置">
			</li>
		</ul>
	</form>

</div>
</body>
</html>