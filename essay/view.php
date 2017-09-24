<?php
session_start();
//$_SESSION['user']="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
   #control{
	   text-size:20px;
	   color:green;
	   float:left;
	   text-align:center;
	   border:2px solid lightblue;
	   margin-left:200px;
	   margin-top:200px;
	   width:400px;
	   height:100px;
	   padding-top:50px;
	   
   }
</style>
<body>
    <div id="control"><!--此处通过超链接进行传递变量-->
        <a href='changePage.php ? pageName=首页 '>首页</a>
        <a href='changePage.php ? pageName=注册 '>注册</a>
        <a href='changePage.php ? pageName=登陆 '>登陆</a>
        <a href='changePage.php ? pageName=发表文章 '>发表文章</a>
        <a href='changePage.php ? pageName=查看文章 '>查看文章</a>
        <a href='UnsetSession.php'>安全退出</a>
    </div>    
</body>
</html>