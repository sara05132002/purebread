<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PureBread</title>
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
	
/*----about----*/
.container #about {
	background-color: #FFFFFF;	
	display:inline-block;
}

.container #about .aboutme {
	width: 50%;
	text-align: center;
	padding-top: 30px;
	float: left;
}
#about .aboutme .cards {
	width: 100%;
	height: 100%;
	max-width: 400px;	
	
}
#about .aboutme h3 {
	padding-top: 15%;
	color: #B3B3B3;
	text-align: center;
}
#about .aboutme p {
    color: #000000;
    background-color: #FFFFFF;
    padding-left: 15%;
    padding-right: 15%;
    text-align: justify;
    line-height: 25px;
    font-weight: lighter;
    
}
/*--footer--*/
.container #contact {
    background-color: #B3B3B3;
    padding-top: 60px;
    padding-bottom: 60PX;
    margin-bottom: 0px;
}

.container #contact .button {
	
	width: 200px;
	margin-top: 40px;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
	padding-top: 20px;
	padding-right: 10px;
	padding-bottom: 20px;
	padding-left: 10px;
	text-align: center;
	vertical-align: middle;
	border-radius: 0px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
	border: 3px solid #FFFFFF;
	color: #FFFFFF;
	transition: all 0.3s linear;
}
.container #contact .logobread_header {
	color: #FFFFFF;
	text-align: center;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	letter-spacing: 4px;
}
	
/*----footer copyright----*/
.container .copyright {
	background-color: #B3B3B3;
	padding-top: 20px;
	padding-bottom: 40PX;
	margin-bottom: 0px;
	text-align: center;
}
/*----section time----*/
.container .time {
	background-color: #FFFFFF;
	padding-bottom: 35px;
}
.container .time .breadtimep {
	text-align: justify;
    text-align: center;
	font-weight: bold;
	
}
.container .time .breadtime {
	text-align: center;	
	margin: auto;	
}

/*----section map----*/

.container .map {
	background-color: #FFFFFF;	
	display:inline-block;
}	
.container .map .aboutmap {
	width: 50%;
	text-align: center;
	padding-top: 0px;
	float: left;
	padding-bottom: 10px;
}
.map .aboutmap p {
    color: #717070;
    padding-left: 30px;
    padding-right: 30px;
    text-align: justify;
    line-height: 25px;
    font-weight: lighter;
    margin-left: 20px;
    margin-right: 20px;
    font-size: 14px;
}
.map .aboutmap .cards {	
	width: 100%;
	height: 100%;
	max-width: 400px;
	padding-top: 30px;
	margin-left: 5%;
}
@media screen and (max-width: 767px) {
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
					<li><a href="#logobread">Home</a></li>
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
		<section class="about" id="about">
			<article class="aboutme">

				<img src="images/aboutbread.jpg"  width="400" height="400" class="cards"/>			
			</article>
			<article class="aboutme">
				<h3>淨之理念</h3>
				<p>淨的理念就是享受天然食材的原味，純橄欖油、無化學物添加，每一口都是純麥的香氣，吃食材而不要吃食品。</p>				
			</article>				
		</section>
		<section class="time">
			<p class="breadtimep">每日歐包出爐品項</p>
			
			<div class="breadtime"><img src="images/breadtime.jpg"></div>
		</section>
		<section class="map">
			<article class="aboutmap">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.491819115288!2d121.75713081537408!3d24.67561455871733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3467e685d532e451%3A0x5efe84f7e28ed870!2z5aO55ZKW5ZWhKOe-headseWMl-aIkOW6lyk!5e0!3m2!1szh-TW!2stw!4v1565632666784!5m2!1szh-TW!2stw" width="400" height="200" frameborder="0" style="border:0" allowfullscreen class="cards"></iframe>			
			</article>
			<article class="aboutmap">
			  <h3>歡迎光臨</h3>
				<p>265宜蘭縣羅東鎮北成路一段120號 (北成國小斜對面)</p>
				<p>電話:03-9516919</p>
				<p>營業時間:0700-2130</p>
				
			</article>				
		</section>
		
		<section class="footer_banner" id="contact">
		  <p class="logobread_header">來FaceBook找我們玩</p>
			
			<a href="https://www.facebook.com/ecoffeelotung120/" title="purebread" style="text-decoration:none;"><div class="button">FaceBook</div></a>
		</section>
		<div class="copyright">&copy;2018 - <strong>PureBread</strong></div>
	</div>
</body>
</html>