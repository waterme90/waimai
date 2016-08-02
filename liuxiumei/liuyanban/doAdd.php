<html>
	<head>
		<title>文本留言板</title>
		<link href="css/lyb.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
	<?php include("head.php")?>
		<div class="lyb_content">
			<?php
				$title=$_POST["title"];
				$author=$_POST["author"];
				$starnum=$_POST["starnum"];
				$content=$_POST["content"];
				$ip=$_SERVER["REMOTE_ADDR"];
				$addtime=time();
				$ly_info="{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";
				$info=file_get_contents("lyb.txt");//获取所有以前留言
				file_put_contents("lyb.txt",$ly_info.$info);
				echo "留言成功！"
			?>
		</div>
	</body>
</html>

