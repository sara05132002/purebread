<?php
	require("connect2.php");
	$data=mysql_query('select * from guest order by guestDate desc')//留言排序
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
	padding-top: 40px;
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
.container .show h2 {
	font-family:微軟正黑體;	
	padding:0 0 20px 0;
	text-align: center;
}
table tr #btndelete {
	text-align: center;
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
					<li><a href="logout.php">登出</a></li>
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
						<td colspan="2" id="btndelete">
							<a href="reply.php?id=<?php echo $rs['guestID'] ?>">回覆</a>　　
							<a href="delete.php?id=<?php echo $rs['guestID'] ?>">刪除</a></td>
					</tr>
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
				<?php if($rs['guestReply']!=""){?>
					<tr>
						<td colspan="2" style="background-color: #999; color=white; text-align: center;">回覆</td>
					</tr>
					<tr>
						<td colspan="2"><?php echo $rs['guestReply']?></td>
					</tr>
				<?php  } ?>
			</table>
			<br><br>
		</section>
		<?php } ?>
		<div class="copyright">&copy;2018PureBread</div>
</div>
	
</body>
</html>
<!doctype html>
