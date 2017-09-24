
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script>
function check(form){
	if(form.title.value=="")
	{
		alert("标题不得为空");form.title.focus();return false;
	}
	if(form.content.value=="")
	{
		alert("内容不得为空");form.title.focus();return false;
	}
	return true;
}
</script>
<style>
   .control{
     text-size:10px;
	 color:red;
	 text-align:center;
   }
   #location{
     border:2px solid lightblue;
	 margin-left:300px;
	 padding-top:40px;
	 width:500px;
	 height:400px;
   }
</style>

<body>
<?php
     session_start();
//echo session_id();
     if($_SESSION['user']=="")
     {
	 echo "<script>alert('您还未登陆，请先登录！');window.location.href='view.php';</script>";
	 exit();
     }
     else{
	      echo "<h4>欢迎你".$_SESSION['user']."</h4>";
     }
?>

<div id="location">
<form action="processWord.php" method="post" name="form1">
<div class="control">标题：<input type="text" name="title" class="control"></div><p>
<div class="control">内容：<textarea name="content" style="width:300px; height:200px;"></textarea><p>
<input type="submit" name="Submit" value="提交" onclick="return check(this.form)">
<input type="reset" name="Reset" value="重填"></div>
</form>
<div class="control"><a href="view.php">返回</a></div>
</div>
</body>
</html>
