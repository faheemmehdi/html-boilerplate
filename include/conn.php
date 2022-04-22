<?php
	$conn=mysqli_connect("Localhost","root", "pass", "dbname");
	if(mysqli_connect_errno()){
	echo "Connection Fail".mysqli_connect_error();
	}
?>