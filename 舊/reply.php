<?php
	
	session_start();
	if($_SESSION['v']!="yes"){
		header("location:login01.php");
	}
	require("connect2.php");
	$id=$_GET['id'];
	$data=mysql_query("select * from guest where guestID='$id'");
	if(isset($_POST['guestReply'])){		
		$guestReply=$_POST['guestReply'];
		
 		mysql_query("update guest set guestReply='$guestReply' where guestID = '$id'");
		header("location:admin.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">
body {
	font-family: source-sans-pro;
	background-color: #f2f2f2;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	font-style: normal;
	font-weight: 200;
	max-width: 800px;
}

.container {

	margin-left: auto;
	margin-right: auto;	
	background-color: #FFFFFF;
	height: auto;
}
/*----header----*/
.container header {
	width: 100%;
	height: 50px;
	background-color: #E8B647;
	border-bottom: 1px solid #E8B647;
}
header a .logo {
	color: #fff;
	font-weight: bold;
	font-size: 20px;
	text-align: undefined;
	width: 30%;
	float: left;
	margin-top: 15px;
	margin-left: 25px;
	letter-spacing: 4px;
}
.container header nav {
	float: right;
	width: 60%;
	text-align: right;
	margin-right: 25px;
}
header nav ul {
	list-style: none;
	float: right;
}
nav ul li {
	float: left;
	color: #FFFFFF;
	font-size: 14px;
	text-align: left;
	margin-right: 25px;
	letter-spacing: 2px;
	font-weight: bold;
	transition: all 0.3s linear;
}
ul li a {
	color: #FFFFFF;
	text-decoration: none;
}
/*----footer copyright----*/
.container .copyright {
	background-color: #B3B3B3;
	padding-top: 0px;
	padding-bottom: 40PX;
	margin-bottom: 0px;
	text-align: center;
}.container .show {
	margin: auto;
	padding:0px;	
}
.container .show table {
   	padding-left: 25%;
	padding-right: 25%;
	width: 100%;
}
table tr{
 background-color:#e5e5e5;
 border:1px solid #999999; 
 text-align:left;
 padding:8px;
 font-size:16px;
 font-family:Arial,微軟正黑體;
 font-weight:normal;
 color:#000000;
}
table tr td{
	vertical-align:middle;	 
	 text-align:left;
	 padding:8px;
	 font-size:16px;
	 font-family:Arial,微軟正黑體;
	 font-weight:normal;
	 	
}
.container .reply {
	padding-left: 25%;
	padding-right: 25%;
	width: 100%;
	padding-bottom: 5%;
}
@media (min-width: 321px)and (max-width: 767px) {
.logo {
	width: 100%;
	text-align: center;
	margin-top: 13px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;	
}
.container header nav {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	width: 100%;
	float: none;
	overflow: auto;
	display: inline-block;
	background: #E8B647;
}
header nav ul {
	padding: 0px;
	float: none;
}
nav ul li {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	width: 100%;
	text-align: center;
	padding-top: 0px;
	padding-bottom: 8px;
}	
}
</style>
</head>

<body>
	<div class="container">
		<header><a href="#">
			<h4 class="logo">Pure Bread</h4></a>
			<nav>
				<ul>
					<li><a href="index01.php">Home</a></li>
					<li><a href="index01.php">關於</a></li>
					<li><a href="bread.php">麵包們</a></li>
					<li><a href="breadpost.php">留言</a></li>
				</ul>
			</nav>
		</header>
	  
		<h2 align="center">管理者頁面</h2>
		<?php
			for($i=1;$i<=mysql_num_rows($data);$i++){
			 $rs=mysql_fetch_assoc($data);
		?>


		
		<section class="show">
			
			<table align="center">					
					<tr>
					  <td width="25%">姓名</td>
					  <td width="75%"><?php echo $rs['guestName']?></td>
					</tr>
					<tr>
					  <td>E-mail</td>
					  <td><?php echo $rs['guestEmail']?></td>
					</tr>
					<tr>
					  <td>主旨</td>
					  <td><?php echo $rs['guestSubject']?></td>
					</tr>
					<tr>
					  <td>留言內容</td>
					  <td><?php echo $rs['guestContent']?></td>
					</tr>
					
			</table>
			<br><br>
		</section>
		<?php } ?>
		<div class="reply">
			<form name="form1" method="post" action="">
				<p>回覆:<br><textarea name="guestReply" cols="50" rows="5"></textarea></p>
				<div class="button">
					<input type="submit" name="button" id="button" value="回覆" class="btn" />
				</div>
			
			</form>
			
		</div>
		
		<div class="copyright">&copy;2018PureBread</div>
</div>
	
</body>
</html>
<!doctype html>
