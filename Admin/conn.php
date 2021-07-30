<?php
	$link=mysqli_connect("localhost","root","9741","artist");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>
