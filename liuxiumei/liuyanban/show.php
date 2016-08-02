<html>
	<head>
		<title>我的留言板</title>
		<link href="css/lyb.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<?php include("head.php");?>
	<div  align="center">
			<table >
				<tr border=1>
					<td class="span0">标题</td>
					<td class="span1">留言者</td>`
					<td class="span2">评价</td>
					<td class="span3">留言ip</td>
					<td class="span4">留言时间</td>
					<td class="span5">删除</td>
				</tr>
			
			<?php
			$ly_info=file_get_contents("lyb.txt");
			$ly=rtrim($ly_info,"@");
			$lyinfoArray=explode("@@@",$ly);
			
			foreach($lyinfoArray as $k=>$v)
			{
				$row=explode("##",$v);//ÒÔ##²ð·Ö³öÒ»ÐÐµÄÐÅÏ¢
				
				
				?>
				<tr class="show_content_li"  border=1>
					<td class="span0"><?=$row[0]?></td>
					<td class="span1"><?=$row[1]?></td>
					<td class="span2"><?=$row[2]?></td>
					<td class="span3"><?=$row[3]?></td>
					<td class="span4"><?=date("Y-m-d H:i:s",$row[4])?></td>
					<td class="span5"><a href="del.php?id=<?=$k?>"><?='É¾³ý'?></a></td>
				</tr>
			
			<?php
			}
			
			?>
		</table>
		</div>
	
	</body>
</html>

