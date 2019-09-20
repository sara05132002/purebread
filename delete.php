<?
	session_start();
	if($_SESSION['v']!="yes"){
		header("location:login01.php");
	}
	require("connect2.php");
	$id=$_GET['id'];
	mysql_query("delete from guest where guestID='$id'");
	header("location:admin01.php");
?>