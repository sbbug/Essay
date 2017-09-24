<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

   $pageName=$_GET['pageName'];
   switch($pageName){
	   case"首页":
	      include_once "view.php";
		  break; 
	   case"注册":
	      include_once "regist.php";
		  break; 
	   case"登陆":
	      include_once "enter.php";
		  break; 
	   case"发表文章":
	      include_once "word.php";
		  break;
	   case"查看文章":
	      include_once "find.php";
		  break;
		default:
		  include_once "view.php";
		  break;    
   }
?>
</body>
</html>