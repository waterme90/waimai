<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车结算功能</title>
<link rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/demo.js"></script>
</head>
<body>
<div class="catbox">
  <table id="cartTable">
    <thead>
      <tr>
        <th><label>
            <input class="check-all check" type="checkbox"/>&nbsp;&nbsp;全选</label></th>
        <th>商品</th>
        <th>单价</th>
        <th>数量</th>
        <th>小计</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
        <td class="goods"><img src="images/1.png" alt=""/><span>西红柿鸡蛋</span></td>
        <td class="price">12.0</td>
        <td class="count"><span class="reduce"></span>
          <input class="count-input" type="text" value="1"/>
          <span class="add">+</span></td>
        <td class="subtotal">12.0</td>
      <!--   <td class="operation"><span class="delete">删除</span></td> -->
      </tr>
      <tr>
        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
        <td class="goods"><img src="images/2.png" alt=""/><span>土豆丝肉丝</span></td>
        <td class="price">15</td>
        <td class="count"><span class="reduce"></span>
          <input class="count-input" type="text" value="1"/>
          <span class="add">+</span></td>
        <td class="subtotal">15</td>
       <!--  <td class="operation"><span class="delete">删除</span></td> -->
      </tr>
      <tr>
        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
        <td class="goods"><img src="images/3.png" alt=""/><span>梅菜扣肉盖饭</span></td>
        <td class="price">17</td>
        <td class="count"><span class="reduce"></span>
          <input class="count-input" type="text" value="1"/>
          <span class="add">+</span></td>
        <td class="subtotal">17</td>
        <!-- <td class="operation"><span class="delete">删除</span></td> -->
      </tr>
      <tr>
        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
        <td class="goods"><img src="images/4.png" alt=""/><span>水煮牛肉</span></td>
        <td class="price">20</td>
        <td class="count"><span class="reduce"></span>
          <input class="count-input" type="text" value="1"/>
          <span class="add">+</span></td>
        <td class="subtotal">20</td>
      <!--   <td class="operation"><span class="delete">删除</span></td> -->
      </tr>
    </tbody>
  </table>
  <div class="foot" id="foot">
    <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
    <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
    <a href="https://excashier.alipay.com/"class="fr closing" >结 算</a>
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