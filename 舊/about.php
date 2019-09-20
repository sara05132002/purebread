<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>

<link rel="stylesheet" href="lightbox.min.css">
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
	
/*----logobread----*/
.container .logobread .logobread_header {
	color: #FFFFFF;
	text-align: center;	
	letter-spacing: 4px;
}
.container .logobread {
    background-color: #B3B3B3;
    padding-top: 150px;
    padding-bottom: 150px;
    background-image: url(images/header.jpg);
}
.container .logobread .tagline {
	text-align: center;
	color: #FFFFFF;
	margin-top: 4px;
	font-weight: lighter;	
	letter-spacing: 1px;
}
/*----footer copyright----*/
.container .copyright {
	background-color: #B3B3B3;
	padding-top: 40px;
	padding-bottom: 40PX;
	margin-bottom: 0px;
	text-align: center;
}

.container .about {
	background-color: #FFFFFF;	
	display:inline-block;
}
.container .about .left {
	width: 60%;
	text-align: left;
	padding-top: 15px;
	float: left;
	padding-bottom: 15px;
	margin-left: 5%;
}
.container .about .right {
	width: 30%;
	text-align: center;
	padding-top: 30px;
	float: right;
}
/*----sit----*/
.container section .sit {
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
.sit{
	display: block;
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
					<li><a href="about.php">關於</a></li>
					<li><a href="bread.php">麵包們</a></li>
					<li><a href="breadpost.php">留言</a></li>
				</ul>
			</nav>
		</header>
	  <section class="logobread">
			<h2 class="logobread_header">
			PureBread</h2>
		<p class="tagline">Pure bread all natrue</p>
	  </section>
		<div class="about">
			<article class="left">
				<h3>Pure&amp;Health</h3>
				<h5>一起回歸最原始的美味與幸福</h5>
				<p>使用初榨橄欖油、無化學物添加，每一口都是純麥的香氣，吃食材而不是吃食品，這些都是師傅的堅持。</p>
				<p>所有品項皆是蛋奶素，奶酥的醬自己調、芝麻的粉自己炒，全手工吃進肚裡更暖胃舒心。</p>
			</article>
			<article class="right">
				<img src="images/about01.jpg" />
			</article>
		</div>
		<div class="setword">
			<h2>店內擺設</h2>
			<h5>歡迎提前來店訂位</h5>
		</div>
		<section>
			
			<div class="sit">
				<section class="sitpic0">
					<a class="setpic-link" href="images/about02.jpg" data-lightbox="aa">
						<img class="setpic" src="images/about02.jpg" alt="" width=200 height=140/></a>
				</section>
				<section class="sitpic0">
					<a class="setpic-link" href="images/about03.jpg" data-lightbox="aa">
						<img class="setpic" src="images/about03.jpg" alt="" width=200 height=140/></a>
				</section>
				<section class="sitpic0">
					<a class="setpic-link" href="images/about04.jpg" data-lightbox="aa">
						<img class="setpic" src="images/about04.jpg" alt="" width=200 height=140/>
				</section>
			</div>		
		</section>
		<div class="copyright">&copy;2018 - <strong>PureBread</strong></div>
	</div>
	
	<script src="lightbox-plus-jquery.min.js"></script>

</body>

</html>