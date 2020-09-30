<?php
session_start();
@ob_start();
include_once "connection.php";
	$uid=$_GET['uid'];
	//$nvalue=stripslashes(trim($_POST['nvalue']));
	$active="UPDATE userinfo SET value='1000' where id=$uid";
echo $acive;
$add_query=mysqli_query($connect,$active)  or die(mysql_error());
 header("location: alluser.php");
?>
