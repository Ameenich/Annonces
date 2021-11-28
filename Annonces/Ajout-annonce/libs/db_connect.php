<?php 
$con=mysqli_connect('localhost','root','','management');
if (mysqli_connect_errno()) {
	# code...
	echo "Could Not Connect to MYSQL database".mysqli_connect_error();
}

 ?>