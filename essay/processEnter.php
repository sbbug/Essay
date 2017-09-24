
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>

<?php
     session_start();
     $username=$_POST['name'];
     $password=$_POST['password'];//提取登陆者的的姓名与密码  
   
     include_once "connectMysql.php";
	 
	 $username=$_POST['name'];
	 $password=$_POST['password'];//提取登陆者的的姓名与密码
      
	 $order="select * from user where username='".$username."'";
	 $result=mysql_query($order,$conn);
	 $row=mysql_num_rows($result);//数据库中被影响的行数
	 $res=mysql_fetch_assoc($result);
	 $pass=$res['password'];
	 
	 if($row==1)
	 {
	     if($pass!=$password)
	     {
		  echo "<script>alert('密码输入错误');window.location.href='enter.php';</script>";
	     }
		 else{
		  $_SESSION['user']=$username; 
		  echo "<script>alert('登陆成功！');window.location.href='view.php';</script>";
		 }
	 }
	 else{
		 echo "<script>alert('对不起，您还未注册，请注册！');window.location.href='regist.php';</script>";
	 }    

?>
</body>
</html>