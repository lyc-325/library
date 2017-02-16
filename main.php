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
      <li><a href="main.php" class="current">控制面板</a></li>
      <li><a href="#" >类别管理</a>
        <ul>
          <li><a href="list-class.html">类别列表</a></li>
          <li><a href="add-class.html">添加类别</a></li>
        </ul>
      </li>
      <li><a href="#">图书管理</a>
        <ul>
          <li><a href="list-book.php">图书列表</a></li>
          <li><a href="add-book.php" >添加图书</a></li>
        </ul>
      </li>
      <li><a href="manage-user.html">用户管理</a></li>
      <li><a href="manage-order.html">订单管理</a></li>
    </ul>
  </div>
</div>
<div id="main-content">
  <h2>欢迎来到后台管理系统</h2>
  <ul id="listicon">
    <li><a href="add-class.html"><img src="images/icons/pencil_48.png"  alt="添加类别" /><br  />
      添加类别</a></li>
    <li><a href="add-book.html"><img src="images/icons/image_add_48.png"  alt="添加图书" /><br  />
      添加图书</a></li>
    <li><a href="list-book.html"><img src="images/icons/paper_content_pencil_48.png"  alt="图书列表" /><br  />
      图书列表</a></li>
    <li><a href="add-class.html"><img src="images/icons/comment_48.png"  alt="用户管理" /><br  />
      用户管理</a></li>
    <li><a href="add-class.html"><img src="images/icons/clock_48.png"  alt="订单管理" /><br  />
      订单管理</a></li>
  </ul>
  <div id="clear"></div>
  <div class="content-box">
    <div class="content-box-header">
      <h3>消息盒子</h3>
    </div>
    <div class="content-box-main">
    
    </div>
  </div>
  <div class="content-box column-left">
    <div class="content-box-header">
      <h3>左消息盒子</h3>
    </div>
    <div class="content-box-main"></div>
  </div>
  <div class="content-box column-right">
    <div class="content-box-header">
      <h3>右消息盒子</h3>
    </div>
    <div class="content-box-main"></div>
  </div>
  <div id="clear"></div>

  <div id="footer"><a href="#">@lyc</a> | <a href="#top">顶端</a></div>
</div>
</body>
</html>
