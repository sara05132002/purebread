<?php
	require("connect2.php");
	ini_set('date.timezone','Asia/Taipei');//timezone不改ini方法
	$guestName=$_POST['guestName'];
	$guestEmail=$_POST['guestEmail'];
	$guestSubject=$_POST['guestSubject'];
	$guestContent=$_POST['guestContent'];
	$guestDate=date("Y:m:d");
		
		
	if(isset($guestName)){
		mysql_query("insert into guest value('','$guestName','$guestEmail','$guestSubject','$guestDate','$guestContent','','')");
		header("location:breadpost01.php");
	}

	$data=mysql_query('select * from guest order by guestDate desc')//留言排序
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Document</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			list-style: none;
			font-family: "黑體-繁","微軟正黑體";
		}		
		/*nav*/
		.bgnav{
			background-color: #E8B647;
		}
		.iconbg{
			background-color: #fff;
		}
		.navsit{
			padding-left: 60%;
		}
		.nav-item{
			text-align: right;
		}
		/*jumbotron*/
		.jumbotron{
			background: url(images/header.jpg) no-repeat center center / cover;
			margin-bottom: 0px;
		}
		.headerh1{
			font-weight: bold;
			padding-left: 5%;
			text-shadow: 0.1em 0.1em #fff;
		}
		.headerp{
			font-weight: 600;
			padding-left: 20%;
			text-shadow: 0.1em 0.1em #fff
		}
		

		.post{
			padding-top:20px;
		}
		.post form{
			max-width: 500px;
			display: block;
			margin: auto;
		}
		.show{
			max-width: 500px;
			margin: auto;
		}
		textarea{
			width: 100%;
		}
		/*.tableall{
			width: 100%;
			border:1px solid #aaa;
			background-color: #cad;
		}
		tr{
			width: 100%;
		}
		td{
			padding: 10px 10px;
			border: 1px solid #fff;
		}*/
		.table-all{
			
		}
		.table-title{
			color: #B63C1A;
			background-color: #F5EFE3;
			width: 25%;
		}
		.table-text{
			width: 75%;
		}
		.table-reply{
			background-color: #F5F5F5;
		}
		tr{
		}
		.th-reply{
			color: #B63C1A;
			background-color: #F5EFE3; 
			text-align: center;
		}




		.footer{
			line-height: 50px;
			background-color: #bbb;
			text-align: center;
		}
		

		@media screen and (max-width: 767px){}
	</style>
</head>
<body>
	<!--nav-->
	<nav class="navbar navbar-expand-lg navbar-light  bgnav"><div class="container">
		<a class="navbar-brand" href="index.php">PureBread</a>
		<button class="navbar-toggler iconbg" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse navsit" id="navbarNavAltMarkup">
			<div class="navbar-nav">
		    	<a class="nav-item nav-link active" href="about01.php"><img src="images/iconbread.png">關於<span class="sr-only">(current)</span></a>
		    	<a class="nav-item nav-link active" href="bread01.php"><img src="images/iconbread.png">麵包們</a>
		    	<a class="nav-item nav-link active" href="breadpost01.php"><img src="images/iconbread.png">留言</a>
		    </div>
		</div></div>
	</nav>
	<!--jumbotron-->
	<div class="jumbotron jumbotron-fluid"><div class="container">
		<div class="header">
			<h1 class="display-4 headerh1">PureBread</h1>
		    <p class="lead headerp">Pure bread all natrue</p>
		</div></div>
	</div>


	<div class="container">
	<div class="post">
		<form name="form1" method="post" action="">
			<p>姓名:<br><input type="text" name="guestName" id="guestName"/></p>
				
			<p>E-mail:<br><input type="text" name="guestEmail" /></p>
				
			<p>主旨:<br><input type="text" name="guestSubject" /></p>
			
			<p>留言內容:<br><textarea name="guestContent" cols="50" rows="5"></textarea></p>
		
			<input type="submit" name="button" id="button" value="送出" class="btn"/>
		</form>		
	</div>
	
		<?php
			for($i=1;$i<=mysql_num_rows($data);$i++){
			 $rs=mysql_fetch_assoc($data);
		?>

	<div class="gon"></div>
	<div class="show">
		<table class="table table-all table-hover">		
			<tr>
				<th class="table-title" scope="col">姓名</td>
				<td class="table-text"><?php echo $rs['guestName']?></td>
			</tr>
			<tr>
				<th class="table-title" scope="col">E-mail</td>
				<td class="table-text"><?php echo $rs['guestEmail']?></td>
			</tr>
			<tr>
				<th class="table-title" scope="col">主旨</td>
				<td class="table-text"><?php echo $rs['guestSubject']?></td>
			</tr>
			<tr>
				<th class="table-title" scope="col">留言內容</td>
				<td class="table-text"><?php echo $rs['guestContent']?></td>
			</tr>
			<?php if($rs['guestReply']!=""){ ?>
			<tr>
				<th class="th-reply" scope="col" colspan="2">回覆</td>
			</tr>
			<tr>
				<td class="table-reply" colspan="2"><?php echo $rs['guestReply']?></td>
			</tr>
			<?php }?>
			<br><br>
		</table>
	</div>
	<?php } ?>

	</div>


	<div class="footer">
		&copy;2018 - <strong>WN</strong>
	</div>







	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>