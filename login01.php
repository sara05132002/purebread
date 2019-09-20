<?php 
require("connect2.php");	
session_start();
	
	if(isset($_POST['usr'])){
		
		$username=$_POST['usr'];
		$password=$_POST['pwd'];
		$data=mysql_query("select * from admin where usr= '$username' and pwd = '$password'");

		if(mysql_num_rows($data)>=1){
			header("location:admin01.php");
			$_SESSION['v']="yes";
		}else{
			echo "NO";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">

.container {
	padding: 20px 0;
	background-color: #f5f5f5;
	width: 800px;
	margin-left: auto;
	margin-right: auto;
}
h2{
	font-family:微軟正黑體;	
	padding:0 0 20px 0;
}
.container #form1 {
    padding-left: 25%;
    padding-right: 25%;
    width: 50%;
    text-align: center;
}
.container .respond {
	background-color: #F8C3CD;
	text-align:center;
	padding:20px 0;
	font-family:微軟正黑體;
}

</style>
</head>

<body>
<div class="container">
		<h2 align="center">管理員登入</h2>
		<form class="form-horizontal" role="form" id="form1" name="form1" method="post" action="">
			<div class="form-group">
			  <p>Username:<input name="usr" type="text" /></p>
			</div>
			<div class="form-group">
				<p>Password :<input name="pwd" type="password" /></p>
			</div>
			<input type="submit" name="button" class="btn" />
		</form>
		
</div>
</body>
</html>