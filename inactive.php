<?php
session_start();
	@ob_start();
include_once "connection.php";
		$uid=$_GET['uid'];
		//$nvalue=stripslashes(trim($_POST['nvalue']));
		// $active="UPDATE userinfo SET status='Inactive' where id=$uid";
		$active="UPDATE userinfo SET value='2' where id=$uid";
echo $active;
$add_query=mysqli_query($connect,$active)  or die(mysql_error());
 header("location: alluser.php");
?>