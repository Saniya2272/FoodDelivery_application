<?php
	$conn = new mysqli("localhost","root","","T");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>