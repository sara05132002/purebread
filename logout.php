<?
session_start();
//直行登出，並刪除session
unset($_SESSION["usr"]);
header("Location:index1.php");
?>