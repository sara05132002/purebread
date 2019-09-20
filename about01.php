<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="lightbox.min.css">
	<title>PureBread-關於我</title>
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

		/*about*/
		.item-group{
			display: flex;
			padding: 5% 0;
		}
		.about-text{
			width: 70%;
		}
		.about-pic{		
			width: 30%;
		}
		.card{
			margin: auto;
			width: 70%;
		}
		/*sit*/
		.sit{
			display: flex;
			padding-bottom: 5%;
		}
		.sitpic{
			width: 100%;
			padding: 0 10px;
		}
		.sit-text{
			background-color: #F5EFE3;
			color: #6A4028;
			padding-top: 10px;
			margin: auto;
			padding: 0 5%;
			width: 100%;
			font-weight: bold;
		}
		.title{
			font-size: 25px;
			margin: 0;
			font-weight: bold;
		}
		/*.container section .sit {
			overflow: auto;
			width: auto;
			padding-bottom: 40px;
		}

		.sit .sitpic0 {
			margin: 2%;
			width: 29%;
			float: left;
		}
		.sitpic0 .setpic-link .setpic {
			width: auto;
			height: auto;
			max-width: 100%;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.container .setword {
			width: auto;
			margin: 2%;
		}*/

		.footer{
			line-height: 50px;
			background-color: #bbb;
			text-align: center;
		}
		

		@media screen and (max-width: 767px){
			.card{
				width: 100%;
				display: block;
				margin: auto;
				border: none;
			}
			.sit{
				margin: 0 10px 20px;
				display: block;
			}
			.sitpic0{
				display: block;
				width: 100%;
				padding: 10px 0px;
			}
			.item-group{
				display: block;
			}
			.about-text{
				width: 100%;
			}
			.about-pic{
				width: 100%;
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
		<div class="jumbotron jumbotron-fluid"><div class="container">
			<div class="header">
				<h1 class="display-4 headerh1">PureBread</h1>
			    <p class="lead headerp">Pure bread all natrue</p>
			</div></div>
		</div>

		<div class="container">
			<div class="item-group">
				<div class="about-text">
					<h3>Pure&amp;Health</h3>
					<h5>一起回歸最原始的美味與幸福</h5>
					<p>使用初榨橄欖油、無化學物添加，每一口都是純麥的香氣，吃食材而不是吃食品，這些都是師傅的堅持。</p>
					<p>所有品項皆是蛋奶素，奶酥的醬自己調、芝麻的粉自己炒，全純手工吃進肚裡更暖胃舒心。</p>
				</div>
				<div class="about-pic">
					<img src="images/about01.jpg" class="card">
				</div>
			</div>
		</div>

		<div class="sit-text"><div class="container">
			<p class="title">店內坐位區</p>
			<p>歡迎提前來電訂位</p></div>
		</div>
		<div class="container">	
		<div class="sit">
							
			<section class="sitpic0">
				<a href="images/about02.jpg" class="setpic-link" data-lightbox="aa">
					<img class="sitpic" src="images/about02.jpg" alt=""/>
				</a>
			</section>
			<section class="sitpic0">
				<a href="images/about03.jpg" class="setpic-link" data-lightbox="aa">
					<img class="sitpic" src="images/about03.jpg" alt=""/>
				</a>
			</section>
			<section class="sitpic0">
				<a href="images/about04.jpg" class="setpic-link" data-lightbox="aa">
					<img class="sitpic" src="images/about04.jpg" alt=""/>
				</a>
			</section>

		</div></div>
		<div class="footer">
			&copy;2018 - <strong>WN</strong>
		</div>
			
		
	<script src="lightbox-plus-jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>