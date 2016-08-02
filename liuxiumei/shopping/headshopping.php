 <div class="header">
    <div class="top-nav">
      <div class="top-nav_ul1">
        <li class="top-nav_li1">
          <span class="top-position">当前位置：北邮</span>
        </li>
        <li class="top-nav_li2">
          <a class="info" href="#">常见问题</a>
          <a class="info" href="../../lingfeng/reginster/reginster.php">注册</a>
          <a class="info" href="#" onclick="show('loginform')">登陆</a>
          <a class="info" href="../../lingfeng/liuyanban/index1.php">留言</a>
        </li>
      </div>
    </div>
    <div class="middle-nav">
       <div class="middle-nav_left">
        <li class="logo">
          <img class="logo" src="../../image/logo.png"></img>
          <span class="logo_font" >网络订餐</span>
          <span class="logo_font"style="  margin-left: 20px;
  font-size: 34px;
  color: rgb(34, 240, 170);width:275px;  font-style: italic;" ><?=$restruantName?>欢迎你！</span>
        </li>
          <li class="sousuo">
            <form action="searchmenu.php?restruantid=<?=$restruantid?>"method="POST">
            <input class="sousuokuang" type="text" name="sousuo" value="输入要搜索的菜名" onfocus="javascript:this.value=''" onblur="javascript:this.value='输入要搜索的饭店名'">
            <input type="submit" class="dosousuo" value="搜索" name="button">
          </form>
        </li>
      </div>
    </div>
</div>

<!---->
<script>
function show(id){
	//alert(id);
	var obj=document.getElementById(id);
	obj.style.display="block";
	//alert(obj.style.display);
  //var alldiv=document.getElementsByTagName()
}
</script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>登陆网络订餐系统</title>

	<style>
	li{list-style: none;}
	
 	.form{
 		margin-left: 40%;
 	}
	.input{height: 33px;
  		width: 202px;}
  	.loginform_ul{float: right;
		width: 300px;
		height: 228px;
		background: rgb(255, 163, 107);
		border: 3px solid rgb(253, 74, 61);
		}
  .loginform_li{ 
  		margin-top: 20px;}
  	.loginform_user{  float: left;width: 100%;
  color: white;
  display: block;}
  .loginform_button{
  	  width: 60px;
  height: 30px;
  background: rgb(253, 74, 61);
  border: none;
  font-size: 12px;
  color: white;
    font-weight: 600;
      margin-left: 20px;
  }
</style>

<div id="loginform" class="loginform" style="display:none;top:40%;left:40%;z-index:20;position:fixed;">
	
	<form action="../login/logincheck.php" method="POST" onsubmit="checkuserRegerest()">
		<ul class="loginform_ul">
			<li class="loginform_li">
				<span class="loginform_user">用户名：</span><input class="input"type="text" name="username" >
			</li>
			<li class="loginform_li">
				<span class="loginform_user">密&nbsp码:</span><input class="input" type="password" name="psd">
			</li>
			<li class="loginform_li">
				<input class="loginform_button" type="submit" name="submit" value="确认">
        <input class="loginform_button" type="button" name="clear" value="取消" onclick="javascript:history.go(0);">
				<!-- <input class="loginform_button" type="reset" name="reset" value=""> -->
			</li>
		</ul>
	</form>

</div>
