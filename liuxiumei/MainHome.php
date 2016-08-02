<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>网络订餐系统</title>
	<style>
	/*------预定义------*/
	li{list-style: none;}
	a{text-decoration: none;}
	body{padding:0px;text-align: center;margin:0px;overflow-x:hidden;overflow-y:auto }
	/*---header---*/
	.header{height: 110px;background-color: #ffffff;margin-bottom: 10px;border-bottom: 1px solid #ebebeb;}
	.header .top-nav{height: 30px;z-index: 10;background-color: #FFA36B;width: 100%; }
	.header .top-nav .top-nav_ul1{height: 100%;width: 71%;margin-left: auto;margin-right: auto;}
	.header .top-nav .top-nav_li1{float:left;}
	.header .top-nav .top-nav_li1 .top-position{display: block;float:left;font-size: 13px;margin-top: 8px;color: white;}
	.header .top-nav .top-nav_li2{float:right;}
	.header .top-nav .top-nav_li2 .info{float:left;margin-left:30px;font-size: 13px;margin-top: 8px;color: white;}
	/*--middlenav--*/
	.header .middle-nav{ width: 71%;margin: 0 auto;}
	.middle-nav_left{float:left;width:100%;}
	.header .middle-nav .logo{float:left;}
	.logo_font{float:left;display: block;width:104px;height:40px;margin-top: 23px;font-size:25px;color: #FFA36B;}
	.sousuo{float: right;  width: 328px;height: 34px;margin-top: 23px;padding-left: 50px;position: relative;z-index: 9;}
	.sousuokuang{float:left;  width: 245px;height: 32px;display: block;padding: 7px 0 7px 10px;line-height: 14px;font-size: 14px;color: #a9a9a9;border: 2px solid #FFA36B;border-right: 0 none;}
	.dosousuo{float:left;  width: 70px;height: 32px;line-height: 32px;font-size: 14px;display: block;text-align: center;background-color: #FFA36B;color: #ffffff;}
	/*-----content-----*/
	.content{background-color: yellow;}

	.content .inner-connent{margin-left: auto;margin-right: auto;width: 77%;background-color: #B5BDD0;}
	.list li{   position: relative; width: 313px;height: 140px;margin-top: 20px;margin-right: 10px;border:2px solid #ccc;}
	.list .fl .preview{float:left;width:100px;height:115px;}
	.list .fl .list_cotent{float:right;width:209px;height:115px;line-height: 2;}
	.list .fl .list_cotent .name{width: 100%; height: 28px;  margin-top: 10px;}
	.list .fl .list_cotent .tag{float:left;width: 100%; height: 28px;}
	.list .fl .list_cotent .price{width: 100%; height:28px;}
    .list_fl{ float:left; font-size: 16px;font-family: 微软雅黑;}
	.list .fl .speed{float:left;width:100%;height:25px;background-color: rgb(205, 206, 207);}
	.fl{float:left;}
	/*-----footer-----*/
	.footer{  float: left;border-top: 2px solid #fe4d3d;background-color: #f5f5f5;color: #3e4545;height: 91px;width: 100%;}
	</style>
</head>
<body>
	<!--header-->
	<?php include 'head.php';?>
	<!--content-->

			<div class="notice">
				
			</div>
			<div class="banner">
			</div>
			<div class="list">
				
					<li class="fl">
						<div class="preview">
							<img src="../image/name1.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>

					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name2.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name3.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
				
					<li class="fl">
						<div class="preview">
							<img src="../image/name4.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name5.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name7.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name8.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name6.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
						<div class="preview">
							<img src="../image/name9.png"></img>
						</div>
						<div class="list_cotent">
							<div class="name">
								<span class="list_fl">名鑫食业</span>
							</div>
							<div class="tag">
								<span class="list_fl">中式炒菜</span>
							</div>
							<div class="price">
								<span class="list_fl">15元起送 免费送餐</span>
							</div>
						</div>
						<div class="speed">
						</div>
					</li>
					<li class="fl">
					</li>
					<li class="fl">
					</li>
					<li class="fl">
					</li>
				
			</div>
	
	<!--footer-->
	<div class="footer">
		<p>@copyright:liuxiumei   技术交流：QQ:853557362</p>
	</div>
</body>
</html>