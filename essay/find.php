
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
				alert("输入不得为空!");form.title.focus();return false;
			}
			return true;
	  }
</script>
<style>
       table{
		   border:1px solid lightblue;
	   }
	   td{
		   border:1px sloid red;
		   background-color:lightblue;
	   }
	   .clss{
		   width:30px;
		   height:20px;
	   }
	   .cls{
		   width:100px;
		   height:50px;
		   background-color:lightblue;
	   }
	   .word{
		   font-size:10px;
		   color:lightblue;
	   }
</style>

<body>
<?php
     session_start();
     //echo session_id();
     if($_SESSION['user']=="")
      {
	   echo "<script>alert('您还未登陆，请先登！');window.location.href='view.php';             </script>";
	   exit();
	  }
	 else{
		 echo "<h4>欢迎你".$_SESSION['user']."</h4>";
	 }
?>
         <table align="center">
         <tr>
        <form action="find.php" method="post">
             <td>请输入要搜索的标题：<td><input type="text" name="title" value="<?php echo $title;?>">
             <td><input type="submit" name="Submit" value="搜索" onclick="return check(this.form)"></td>
        </form>
        </tr>
        <a href="word.php" class='word'>发表文章</a>

<?php
       include_once "connectMysql.php";	 
	   $order="select * from text where title like '%".$_POST['title']."%' ";
	   if(isset($_POST['title']))
	   {
	   $result=mysql_query($order,$conn);
	   
	   while($row=mysql_fetch_array($result)){
		   echo "<tr>";
		   //echo "<td>标题是：</td><td>$row[1]</td>>";
		   echo "<td>内容是：</td><td class='cls'>$row[2]</td>";
		   echo "</tr>";
		}
      }
	
?>
       </table>
</body>
</html>