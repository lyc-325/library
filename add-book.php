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
    <p>你好，<a href="#">lyc</a>，你有三条<a href="#">未读消息</a><br />
      <a href="#">查看前台</a> | <a href="#">注销</a></p>
    <ul id="navmenu">
      <li><a href="main.php" >控制面板</a></li>
      <li><a href="#" >类别管理</a>
        <ul>
          <li><a href="list-class.html" >类别列表</a></li>
          <li><a href="add-class.html">添加类别</a></li>
        </ul>
      </li>
      <li><a href="#"  class="current">图书管理</a>
        <ul>
          <li><a href="list-book.php">图书列表</a></li>
          <li><a href="add-book.php"  style="text-decoration: underline;">添加图书</a></li>
        </ul>
      </li>
      <li><a href="manage-user.html">用户管理</a></li>
      <li><a href="manage-order.html">订单管理</a></li>
    </ul>
  </div>
</div>
<div id="main-content">
    <div class="main-box">
    <form name="frm" method="post" action="book_upload.php" enctype="multipart/form-data">
      <div class="in-tag"><p style="display: inline-block;">图书名称</p><input class="add-box" type="text" name="bookname" ></div> 
      <div class="in-tag"><p style="display: inline-block;float: left;">图书介绍</p><input class="textarea0" type="text" name="jieshao"></div>
      <div class="in-tag"><p style="display: inline-block;">图片</p><input class="add-box" type="file" name="picture"></div>
      <div class="in-tag"><p style="display: inline-block;">价格</p><input class="add-box" type="text" name="price" ></div>
      <input style="margin: 0 150px;" class="button" name="sub" type="submit" value="提交"></input><input class="button" type="reset" value="重置"></input>
    </form>  
    </div>
      
  <div id="footer"><a href="#">@lyc</a> | <a href="#top">顶端</a></div>
</div>
</body>
</html>
