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
/*----mainContent----*/
.container .mainContent {	
	width: 90%;
	text-align: center;
	padding-left: 4%;}
.container .mainContent .productRow {
	overflow: auto;
	color: rgba(146,146,146,1.00);
}
.mainContent .productRow .productInfo {
	float: left;
	padding-left: 5%;
	padding-right: 5%;
	padding-bottom: 5%;
	width: 23%;
}
.productRow .productInfo .productContent {
	position: relative;	
	font-size: 14px;
	font-family: source-sans-pro, sans-serif;
	font-style: normal;
	font-weight: 200;
	color: #6A4028;
	white-space: pre-wrap;
	background-color: #F5EFE3;
	font-weight: bold;
}
.container .text {
    text-align: center;
    height: 50px;
    padding-top: 5px;
    background-color: #F5EFE3;
	color: #6A4028;
	font-weight: bold;
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
		<section class="text">
			<p>每日新鮮出爐，歡迎提前電話預訂</p>
		</section>
		<section class="mainContent">
			<div class="productRow">
				<article class="productInfo">
					<div><img src="images/c1.jpg" /></div>
					<p class="productContent">桂圓歐包</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c2.jpg" /></div>
					<p class="productContent">蔓越莓歐包</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c3.jpg" /></div>
					<p class="productContent">葡萄核桃歐包</p>
				</article>
			</div>
			<div class="productRow">
				<article class="productInfo">
					<div><img src="images/c4.jpg" /></div>
					<p class="productContent">薄鹽核桃歐包</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c5.jpg" /></div>
					<p class="productContent">南瓜子歐包</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c6.jpg" /></div>
					<p class="productContent">奶酥歐包</p>
				</article>
			</div>
			<div class="productRow">
				<article class="productInfo">
					<div><img src="images/c7.jpg" /></div>
					<p class="productContent">蜂蜜燕麥歐包</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c8.jpg" /></div>
					<p class="productContent">蘋果歐包</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c9.jpg" /></div>
					<p class="productContent">芝麻吐司</p>
				</article>
			</div>
			<div class="productRow">
				<article class="productInfo">
					<div><img src="images/c9.jpg" /></div>
					<p class="productContent">鮮奶吐司</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c9.jpg" /></div>
					<p class="productContent">夫妻吐司</p>
				</article>
				<article class="productInfo">
					<div><img src="images/c9.jpg" /></div>
					<p class="productContent">葡萄核桃吐司</p>
				</article>
			</div>
		</section>
		
		<div class="copyright">&copy;2018 - <strong>PureBread</strong></div>
	</div>
</body>
</html>