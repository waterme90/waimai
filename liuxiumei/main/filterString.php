<?php
// $content = " 宝宝</em>从昨晚开始就有点发烧了</em>，一直在38度左右，不是很高所以不想带宝宝</em>去医院打针太小了，各位宝妈有什么好的办法可以快速退烧的，谢谢了";
// // echo "\n";
// $content =  buqiem($content, '<p><em>');
// echo $content;

//  function clearLabel($content = '')
//   {
//         $content = strip_tags($content, '<p><br><em>');
//         $content = preg_replace('/<br\\s*\/>/i', '\n', $content);//<br/>  =>  '\n'
//         $content = preg_replace('/&nbsp;/i', ' ', $content);//&nbsp => ' ' 
//         $content = preg_replace('/<p\\s*>/i', '', $content);//<p> =>'';
//         $content = preg_replace('/<\/p\\s*>/i', '\n', $content);//</p> => '\n'
//         return $content;
//      }

// function buqiem($content){

// 	if(strpos($content,"</em>")!==false&&strpos($content,"<em>")===false){

// 		preg_match_all("/[^(<\/em>)]+(<\/em>)/",$content,$arr);
		
// 		$str = '';
// 		foreach ($arr[0] as $key => $value) {
// 			$str .= "<em>".$value."</em>";
// 		}
		
// 		return $str;
// 	}
// }


$content = "宝宝</em>从昨晚开始就有点发烧了</em>，一直在38度左右</em>，不是很高所以不想带宝宝</em>去医院打针太小了，各位宝妈有什么好的办法可以快速退烧的，谢谢了";

echo $content =  buqiem($content);
function buqiem($content)
{
	if(strpos($content,"<em>")!==false) return $content;
	
	preg_match_all("/[^<em><\/em>]+<\/em>/",$content,$arr);
	
	foreach ($arr[0] as $key => $value) {
		$str = "<em>".$value;
		$content = str_replace($value,$str,$content);
	}
	return $content;
}

//echo $content;
// preg_replace("/<\/em>[^<em><\/em>]+<\/em>/","",$content);

// 		preg_match_all("/<\/em>[^<em><\/em>]+<\/em>/",$content,$arr);
// 		var_dump($arr);
// 		exit;
// 		$str = '';
// 		foreach ($arr[0] as $key => $value) {
// 			$str .= "<em>".$value."</em>";
// 		}
		
// 		return $str;
