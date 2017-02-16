<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>书店后台管理</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="main">
<div id="sidebar">
  <div id="sidebar-wrapper">
    <h1>书店后台管理</h1>
    <p>你好，<a href="#"><?php
//retrieve session data
   session_start();
echo $_SESSION['views'];
?></a>，你有三条<a href="#">未读消息</a><br />
      <a href="#">查看前台</a> | <a href="#">注销</a></p>
    <ul id="navmenu">
      <li><a href="main.php" >控制面板</a></li>
      <li><a href="#" >类别管理</a>
        <ul>
          <li><a href="list-class.html">类别列表</a></li>
          <li><a href="add-class.html">添加类别</a></li>
        </ul>
      </li>
      <li><a href="#" class="current">图书管理</a>
        <ul>
          <li><a href="list-book.php" style="text-decoration: underline;">图书列表</a></li>
          <li><a href="add-book.php" >添加图书</a></li>
        </ul>
      </li>
      <li><a href="manage-user.html">用户管理</a></li>
      <li><a href="manage-order.html">订单管理</a></li>
    </ul>
  </div>
</div>
<div id="main-content">
    <table class="list-table">
      <tr class="tr1">
        <td class="td1">序号</td>
        <td>图书名称</td>
        <td>介绍</td>
        <td>图片</td>
        <td>价格</td>
        <td>操作</td>
      </tr>
      <?php 
      include "config.php";
      $sql="SELECT * FROM book";
      foreach ($pdo->query($sql) as $row)
      {
      	$id=$row['id'];
      	$bookname=$row['bookname'];
      	$jieshao=$row['jieshao'];
      	$picture=$row['picture'];
      	$price=$row['price'];
      ?>
       <tr class="tr1">
        <td class="td1"><?php echo $id?></td>
        <td><?php echo $bookname?></td>
        <td><?php echo $jieshao?></td>
        <td><?php echo $picture?></td>
        <td><?php echo $price?></td>
        <td><input class='button' type='submit' style='margin-bottom:20px;' value='删除' onclick="window.location.href='delete_book.php?id=<?php echo $id?>'"></input></td>
      </tr>
      <?php }?>
    </table>
  <div id="footer"><a href="#">@lyc</a> | <a href="#top">顶端</a></div>
</div>
</body>
</html>
