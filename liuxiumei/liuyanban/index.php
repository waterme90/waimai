<?php
/*if(!isset($_SESION["loginname"])){
	$_SESSION["message"]="未登录！无法访问URL={$_SEVER["REQUEST_URI"]}";
	header("location:../login/login.php");
	exit;
}
if(!isset($_SESION["lohinIP"]) || ($_SESION["loginIP"]!=$_SEVER["REMOTE_ADDR"])){
	//请求并非来自创建session的主机
	//小心回话攻击
	$_SESSION["message"]="非法iP！小心回话攻击！";
	header("location:../login/login.php");
	exit;
}*/
?>
	<head>
		<title>文本留言板</title>
		<link href="css/lyb.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <style type="text/css">
    
    #wrapper{height:20px;padding:5px;width:100px;}
    .wrapper a{float:left;width:26px;height:20px;background:url(./img/star.png) 0 -20px no-repeat;}
   
    </style>
	</head>
	<div>
		<center>
			<h2>我的留言板</h2>
			<a href="index.php">添加留言</a>
			<a href="show.php">查看留言</a>
			<hr width="90%">
			<h3>添加留言</h3>
			
			<div class="backgroundimg">
				<form action="doAdd.php" method="POST" >
				
				
					<table width="400px" >
						<tr>
							<td align="right">标题</td>
							<td> <input type="text" name="title"></td>
						</tr>
						<tr>
							<td align="right">留言者</td>
							<td> <input type="text" name="author"></td>
						</tr>
						<tr>
							<td align="right">评分</td>
							 <td id="wrapper" class="wrapper">
						        <a href="javascript:;"></a>
						        <a href="javascript:;"></a>
						        <a href="javascript:;"></a>
						        <a href="javascript:;"></a>
						        <a href="javascript:;"></a>
						    </td>
						    <td><p name="starnum"></p></td>
						</tr>
						<tr>
							<td  align="right" valign="top">评价</td>
							<td > <textarea name="content" rows="5" cols="30"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" align="center"> 
							<input type="submit" value="确定">&nbsp&nbsp&nbsp&nbsp
							<input type="reset" value="取消"></td>
							
						</tr>
					</table>
					
				</form>
			</div>
			
		</center>
    </div>

<script type="text/javascript">
window.onload = function(){
    var star = document.getElementsByTagName('a');
    var oDiv = document.getElementById('wrapper');

    var temp = 0;
    
    for(var i = 0, len = star.length; i < len; i++){
        star[i].index = i;
        
        star[i].onmouseover = function(){
            clear();
            for(var j = 0; j < this.index + 1; j++){
                star[j].style.backgroundPosition = '0 0';
            }
        }
        
        star[i].onmouseout = function(){
            for(var j = 0; j < this.index + 1; j++){
                star[j].style.backgroundPosition = '0 -20px';
            }
            current(temp);
        }
        star[i].onclick = function(){
			temp = this.index + 1;
			document.getElementsByTagName('p')[0].innerHTML = (temp-2) + ' 颗星';
			current(temp);
		}
       
    }
    //清除所有
    function clear(){
        for(var i = 0, len = star.length; i < len; i++){
            star[i].style.backgroundPosition = '0 -20px';
        }
    }
    //显示当前第几颗星
    function current(temp){
        for(var i = 0; i < temp; i++){
            star[i].style.backgroundPosition = '0 0';
        }
    }
};
</script>