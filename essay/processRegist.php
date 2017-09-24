<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
  
  include_once "connectMysql.php";
 
  $order="insert into user (username,password,QQ) values ('".$_POST['user']."','".$_POST['password']."', ".$_POST['QQ'].");";
  $result=mysql_query($order,$conn);
  
  
  if($result){
	  echo "<script>alert('注册成功！');window.location.href='view.php'</script>";
  }else{
	  echo "<script>alert('注册失败！');window.location.href='regist.php'</script>";
  }
  
  mysql_close($conn);

?>
</body>
</html>