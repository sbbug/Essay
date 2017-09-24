<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script>
   function check(form){
	 if(form.user.value=="")
	    {
			alert("用户名不得为空！");form.user.focus();return false;
		}
     if(form.password.value=="")		
	   {
		    alert("密码不得为空！");form.user.focus();return false;
	   }
	 if(form.QQ.value=="")
	 {
		 alert("QQ号不得为空！");form.QQ.focus();return false;
	 }
	   return true;
   }
</script>
<style>
   #controlView{
	   width:200px;
	   height:300px;
	   color:green;
	   border:2px solid lightblue;
	   margin-left:100px;
	   margin-top:100px;
   }
</style>
<body>
    <div id="controlView">
        <form action="processRegist.php" method="post">
        请填写用户名：<input type="text" name="user"><br/>
        请填写密码：  <input type="password" name="password"><br/>
        QQ号：      <input type="text" name="QQ"><br/>
                    <input type="submit" name="Submit" value="注册" onclick="return check(this.form)">
                    <input type="reset" name="Reset" value="重填">
        </form>
    </div>
</body>
</html>