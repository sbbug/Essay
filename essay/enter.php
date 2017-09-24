<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script>
   function check(form){
	
	  if(form.name.value=="")
	  {
		  alert("用户名不得为空！");form.name.focus();return false;
	  }
	  if(form.password.value=="")
	  {
		  alert("密码不得为空！");form.name.focus();return false;
	  }
	  return ture;
	  
	}
</script>
<style>
     #controlEnter{
		 width:200px;
		 height:250px;
		 color:#00C;
		 border:2px solid lightblue;
		 padding-top:10px;
		 margin-top:200px;
		 margin-left:200px;
	 }
</style>
<body>
  <div id="controlEnter">
    <form action="processEnter.php" method="post">
       用户名：<input type="text" name="name"><br/>
       密码：  <input type="password" name="password"><br/>
              <input type="submit" name="Submit" value="登陆" onclick="return check(this.form)">
              <input type="reset" name="Reset" value="重填">
    </form>
  </div>  
</body>
</html>