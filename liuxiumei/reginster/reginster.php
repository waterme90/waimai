
<html>
<head>
	<title>用户注册</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/regstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="top"><h1>用户注册</h1></div>
	<div class="content">
		<form action="#" class="regform" method="POST">
		<ul>
			<li>
				<span class="spa0">手机号：</span>
				<span class="spa1"><input class="biankuang" id="loginname" type="text" name="loginname"   required  onchange="check(this.id)"></span>
				<span id="loginname1" class="status1">*请输入正确手机号</span>
			</li>
			<li>
				<span class="spa0">登录名：</span>
				<span class="spa1"><input class="biankuang" id="username"  type="text" name="username" required  onchange="check(this.id)"></span>
				<span id="username1" class="status1">*输入登录名</span>
			</li>
			<li>
				<span class="spa0">密码：</span>
				<span class="spa1"><input class="biankuang" type="password" id="password" name="password" required onchange="check(this.id)"></span>
				<span id="password1" class="status1">请输入不少于6位的密码</span>
			</li>
			<li>
				<span class="spa0">确认密码：</span>
				<span class="spa1"><input class="biankuang" type="text" id="checkpassword" name="checkpassword" required onchange="check(this.id)"></span>
				<span id="checkpassword1" class="status1">*输入确认密码</span>
			</li>
			
			<li >
				<span class="content_li_con"><input class="button" type="submit" name="submit" value="确认" >
			    <input class="button" type="button" name="clear" value="取消" onclick="history.go(-1)"></span>
			</li>
		</ul>
		</form>
	</div>
	
	<div  class="fonter"></div>
	<script>
	function getStyle(element,property) {
		var value = element.style[camelize(property)];
		if(!value) {
			if(document.defaultView && document.defaultView.getComputedStyle) {
				value = document.defaultView.getComputedStyle(element).getPropertyValue(property);}
				else if(element.currentStyle) {
					value = element.currentStyle[camelize(property)];
				}
			}
		return value;
	}

	function check(id)
		{
			var sRex;
			var obj=document.getElementById(id);
			var objlable=document.getElementById(id+'1');
			var stomatch=obj.value;
			//var sobjlable=objlable.
			//检测输入是否正确，正确变为状态1，否则变为状态0
			var flag=0;
			switch(id){
				case "loginname":{
					sRex= /^[0-9]{1,}/;
					if(stomatch.length!=11|| !sRex.test(stomatch)){
						flag=0;
					}
					else flag=1;
					break;
				}
				case "username":{
					// sRex= /^\w+$/i;
					// if(stomatch.length<1 || stomatch.length>20 || !sRex.test(stomatch)){
					// 	flag=0;
					// }
					flag=1;
					break;
				}
				case "password":{
					sRex= /^\w+$/i;
					if(stomatch.length<4 || stomatch.length>20 || !sRex.test(stomatch)){
						flag=0;
					}
					else flag=1;
					break;
				}
				case "checkpassword":{
					sRex= /^\w+$/i;
					if(document.getElementById('checkpassword').value!=document.getElementById('password').value){
						flag=0;
					}
					else flag=1;
					break;
				}
				

			}
			if(flag){
				objlable.innerHTML="OK!"
				objlable.setAttribute("className","status2");//IE
				objlable.setAttribute("class","status2");//FF
			
			}
			else{
				
				switch(id){
					case "loginname":{objlable.innerHTML="错误！手机号为11位！请重新输入";break;}
					case "username":{objlable.innerHTML="";break;}
					case "password":{objlable.innerHTML="错误！密码不少于6位！请重新输入";break;}
					case "checkpassword":{objlable.innerHTML="错误！两次密码不一致！请重新输入";break;}
					
				}
				objlable.setAttribute("className","status3");//IE
				objlable.setAttribute("class","status3");//FF
				//objlable.style.color="red";
				//objlable.style.fontSize="12";
			}
			
			//获取lable
			//var nextobj=document.getElementsById(id+'1');
			//alert(typeof loginname.value);
			
			
		}
	</script>
</body>
</html>