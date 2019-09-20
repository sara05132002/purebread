<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">
header {
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
.nav {
	float: right;
	width: 60%;
	text-align: right;
	margin-right: 25px;
	position: relative;
	margin-top: 15px;
	}
	.nav ul {
	margin: 0;
	padding: 0;
	}
	.nav li {
	margin: 0 5px 10px 0;
	padding: 0;
	list-style: none;
	display: inline-block;
	}
	.nav a {
	padding: 3px 12px;
	text-decoration: none;
	color: #999;
	line-height: 100%;
	}	
	
	/* right nav */
	.nav.right ul {
	text-align: right;
	}
	/* center nav */
	.nav.center ul {
	text-align: center;
	}
@media screen and (max-width: 600px) {
	.logo {
	width: 100%;
	text-align: center;
	margin 0px;
}
	.nav {
	left: 40%;
    right: 0px;
	position: relative;
	min-height: 40px;
	}    
	.nav ul {
	width: 100px;
	height: 100px;
	padding: 0 0;
	position: absolute;
	border: solid 1px #aaa;
	background: #fff url("images/icon-list.png") no-repeat ;
	}
	.nav li {
	display: none; /* hide all <li> items */
	margin: 0;
	}
	.nav .current {
		
	display: block; /* show only current <li> item */
	}
	.nav a {
	display: block;
	padding: 5px 5px 5px 32px;
	text-align: left;
	}
	/* on nav hover */
	.nav ul:hover {
	background-image: none;
	}
	.nav ul:hover li {
	display: block;
	margin: 0 0 5px;
	}
	.nav ul:hover .current {
    background: url("images/icon-list.png") no-repeat;   
    background-size: 50% 50%;
	}

	
}
</style>
</head>

<body>
	<header><a href="#">
			<h4 class="logo">Pure Bread</h4></a>
			<nav class="nav">
				<ul>
					<li class="current"></li>
					<li><a href="#logobread">Home</a></li>
					<li><a href="about.php">關於</a></li>
					<li><a href="bread.php">麵包們</a></li>
					<li><a href="breadpost.php">留言</a></li>
				</ul>
			</nav>
		</header>
</body>
</html>