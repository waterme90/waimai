
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>网络订餐系统</title>
	<link rel="stylesheet" href="css/all.css">
	<script>
/*function hiddenAll(){
	//var loginform=document.getElementById("loginform");
	//alert("aa");
	var mdiv=document.createElement("div");
	mdiv.style.width=screen.width+'px';
	//alert(screen.width);
	mdiv.style.height=screen.height+'px';
	alert(mdiv.style.height);
	mdiv.style.background="black";
	mdiv.style.position="fixed";
	mdiv.style.opacity="0.6";
	mdiv.style.marginTop=-0+'px';
	mdiv.style.marginLeft=0+'px';
	mdiv.style.zIndex="10";
	document.body.appendChild(mdiv);
}*/
function showloginform(){
	
	var loginform=document.getElementById("loginform");
	loginform.style.display="block";
	//loginform.style.position="absolute";
	//loginform.style.zIndex="10";
	//loginform.style.marginTop=screen.height/2+'px';

	//hiddenAll();
}
</script>
</head>
<body>
<div class="header" >
		<div class="top-nav">
			<div class="top-nav_ul1">
				<li class="top-nav_li1">
					<span class="top-position">当前位置：长治学院</span>
					<span class="top-position" style="margin-left:20px">状态：未登录</span>
				</li>
				<li class="top-nav_li2">
					<a class="info" href="#">常见问题</a>
					<a class="info" href="../reginster/reginster.php">注册</a>
					<a class="info" href="../login/login.php" >登陆</a>
					<a class="info" href="../liuyanban/index.php">留言</a>
				</li>
			</div>
		</div>
		<div class="middle-nav">
			 <div class="middle-nav_left">
			 	<li class="logo">
					<img class="logo"src="../../image/logo.png"></img>
					<span class="logo_font" >网络订餐</span>
				</li>
			   	<li class="sousuo">
			   		<form action="../main/searchmenu.php" method="POST" target="_blank">
						<input class="sousuokuang" type="text" name="sousuo" value="输入要搜索的饭店名" onfocus="javascript:this.value=''" onblur="javascript:this.value='输入要搜索的饭店名'">
						<input type="submit" class="dosousuo" value="搜索" name="button">
					</form>
				</li>
			</div>
		</div> 

</div>

</body>