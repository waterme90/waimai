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
include "../encode.php";
$restruantid =  idcrypt::decodeAQid($_GET['restruantid']);

//$restruantid=$_GET['restruantid'];
$restruantName=strval($_GET['restruantName']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车结算</title>
<link rel="stylesheet" href="newcss/style.css"/>
<script type="text/javascript" src="js/demo.js"></script>
<link rel="stylesheet" href="css/all.css">
</head>
<body>
 <?php include "headshopping.php";?>
<div class="catbox">
  <table id="cartTable">
    <thead>
      <tr>
        <th><label>
         <!--    <input class="check-all check" type="checkbox"/>&nbsp;&nbsp;全选</label></th> -->
       
        <th><?=$restruantName?>商品</th>
        <th>单价</th>
        <th>数量</th>
        <th>小计</th>
       <!--  <th>操作</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
        
       // $_SESSION['restruantid']=$restruantid;
      //echo $restruantid;
        $sql="select * FROM  restruant_menu WHERE rest_id ='{$restruantid}'";

        //$res=mysql_query($sql);
        $res=mysql_query($sql,$con);
        if(!$res){die('Error: ' . mysql_error());exit;}

       // print_r($res);
        while($row=mysql_fetch_row($res)){
          //print_r($row);
          $rest_menu_id=$row[0];
          //echo $row['0'];
          $rest_menu_name=$row[2];
          $rest_menu_price=$row[3];
          $rest_menu_imgUrl=$row[4];
        ?>
        <tr>
          <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
          <td class="goods"><img src="<?=$rest_menu_imgUrl?>" alt=""/><span><?=$rest_menu_name?></span></td>
          <td class="price"><?=$rest_menu_price?></td>
          <td class="count"><span class="reduce"></span>
            <input class="count-input" type="text" value="1"/>
            <span class="add">+</span></td>
          <td class="subtotal"><?=$rest_menu_price?></td>
         <!--  <td class="operation"><span class="delete">删除</span></td> -->
        </tr>
      <?php
      }
    ?>
    </tbody>
  </table>
  <div class="foot" id="foot">
    <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
  <!--   <a class="fl delete" id="deleteAll" href="javascript:;">删除</a> -->
    <a href="../login/authenticateUser.php"class="fr closing" >结 算</a>
    <input type="hidden" id="cartTotalPrice" />
    <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
    <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up">︽</span><span class="arrow down">︾</span></div>
    <div class="selected-view">
      <div id="selectedViewList" class="clearfix">
        <div><img src="images/1.jpg"><span>取消选择</span></div>
      </div>
      <span class="arrow">◆<span>◆</span></span> </div>
  </div>
</div>
</body>
</html>