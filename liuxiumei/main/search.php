<?php
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('could not connect:'.mysql_error());
	}
	$dbname="test";
	mysql_query("set names 'utf8'");
	mysql_select_db($dbname,$con);
?>
<?php

	$searchText=$_GET['tag'];
	if(isset($_POST['sousuo']))
		$searchBox=$_POST['sousuo'];
	else $searchBox = '';

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>网络订餐系统</title>
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<!--header-->
	<?php include '../head.php';?>
	<!--content-->
	<div class="content">
		<?php include 'left_content.php';?>
		
		<div class="inner-connent">
			<div class="notice">
				
			</div>
			<div class="banner">
			</div>
			<div class="list">
				<ul>
					<div class="nav_m">
						<?php
						//echo $searchText;
						if(isset($searchText)){
							$sql="select * from restruant where restruant_tag like '%{$searchText}%'";
							//echo $sql;
						}
						if(isset($searchBox)){
							$sql="select * from restruant where restruant_name like '%{$searchBox}%'";
						}

								//$sql="select * from restruant where (restruant_tag like '%{$searchText}%') or (restruant_name like '%{$searchBox}%')";
								//$sql="select * from restruant where restruant_name like '%{$searchBox}%'";
								$re=mysql_query($sql,$con);//返回查询结果集,成功返回true失败返回false
								if(!$re){echo "查询错误！请检查sql语句";}
								//$i=0;
								while($row=mysql_fetch_row($re)){
									//print_r($row);
									$restruantId=$row[0];
									$imgUrl=$row[6];
									$restruantName=$row[1];
									$restruantTag=$row[2];
									$restruantPrice=$row[3];

							?>
							<a href="../shopping/index.php?restruantid=<?=$restruantId?>">
								<li class="fl">
									<div class="preview">
										<div class="img1"><img src="<?php echo $imgUrl?>"></img></div>
									</div>
									<div class="list_cotent">
										<div class="name">
											<span class="list_fl"><?=$restruantName?></span>
										</div>
										<div class="tag">
											<span class="list_fl"><?=$restruantTag?></span>
										</div>
										<div class="price">
											<span class="list_fl"><?=$restruantPrice?>元起送 免费配送</span>
										</div>
									</div>
									<div class="speed">
									</div>
								</li>
							</a>
							<?php	
							}
							?>
						
					
				</ul>
			</div>
		</div>
	</div>
	<!--footer-->
<?php include '../footer.php';?>
</body>
</html>