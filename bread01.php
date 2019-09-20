<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>PureBread-麵包們</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			list-style: none;
			font-family: "黑體-繁","微軟正黑體";
		}
		body{
			background-color: #F5EFE3;
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
		.item-group{
			background-color: #fff;
			max-width: 1400px;
			display: flex;
			padding: 0 10%;
			margin: auto;
		}
		.item{
			background-color: #fff;
			width: 100%;
			padding: 0 3%;
			margin: 3% 3%;
			margin-top: 10px;
			box-shadow:3px 3px 4px 0px rgba(0,0,0,0.16);
		}
		
		.item .pic img{
			width: 100%;
		}
		.item .text{
			margin-top: 25px;
			background-color: #F5EFE3;
			color: #B63C1A;
			text-align: center;
		}
		.item .text p{
			font-size: 20px;
			border: 2px solid #B63C1A;			
			border-radius: 10px;
		}

		.bread-text{
			font-size: 20px;
			line-height:60px;
			font-weight: bold;
			text-align: center;
			font-size: 24px;
			margin-bottom: 0px; 
		}
		.title{
			margin: 0;
		}
		.footer{
			line-height: 50px;
			background-color: #bbb;
			text-align: center;
		}
	@media screen and (max-width: 767px){
		.item-group{
			width: auto;
			display: block;
		}
		.item{
			box-shadow:3px 3px 4px 0px rgba(0,0,0,0.16);
			margin: 0 0;
		}
		

	} 
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
	<div class="jumbotron jumbotron-fluid">
		<div class="header"><div class="container">
			<h1 class="display-4 headerh1">PureBread</h1>
			<p class="lead headerp">Pure bread all natrue</p>
		</div></div>
	</div>




	<div class="bread-text">
		<p class="title">每日新鮮出爐，歡迎提前電話預訂</p>
	</div>
	<div class="container">
	<div class="itemall">
		<div class="item-group">
			<div class="item">
				<div class="pic"><img src="images/c1.jpg" alt=""></div>
				<div class="text">
					<p>培根起司歐包</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c2.jpg" alt=""></div>
				<div class="text">
					<p>蔓越莓歐包</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c3.jpg" alt=""></div>
				<div class="text">
					<p>葡萄核桃歐包</p>
				</div>
			</div>
		</div>
		<div class="item-group">	
			<div class="item">
				<div class="pic"><img src="images/c4.jpg" alt=""></div>
				<div class="text">
					<p>薄鹽核桃歐包</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c5.jpg" alt=""></div>
				<div class="text">
					<p>桂圓歐包</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c6.jpg" alt=""></div>
				<div class="text">
					<p>奶酥歐包</p>
				</div>
			</div>
		</div>
		<div class="item-group">
			<div class="item">
				<div class="pic"><img src="images/c7.jpg" alt=""></div>
				<div class="text">
					<p>蜂蜜燕麥歐包</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c8.jpg" alt=""></div>
				<div class="text">
					<p>夫妻吐司</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c9.jpg" alt=""></div>
				<div class="text">
					<p>鮮奶吐司</p>
				</div>
			</div>
		</div>
		<div class="item-group">
			<div class="item">
				<div class="pic"><img src="images/c9.jpg" alt=""></div>
				<div class="text">
					<p>雞蛋牛奶吐司</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c9.jpg" alt=""></div>
				<div class="text">
					<p>奶酥葡萄吐司</p>
				</div>
			</div>
			<div class="item">
				<div class="pic"><img src="images/c9.jpg" alt=""></div>
				<div class="text">
					<p>蔓越莓吐司</p>
				</div>
			</div>
		</div>
	</div></div>
	
	<div class="footer">
		&copy;2018 - <strong>WN</strong>
	</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>