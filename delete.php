<?php
include_once "connection.php";

$sql  = "DELETE FROM userinfo WHERE id='" . $_GET["uid"] . "'";
echo $sql;
$result=mysqli_query($connect, $sql);
if (!$result) 
{
	echo "Record Deleted Successfully";
} else 
{
	echo "Delete Process Failed" . mysqli_error($connect);
}
mysqli_close($connect);
header("location: alluser.php");
?>