<?php 
	$conn=mysqli_connect("localhost","root","","tin9a5");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die ("Không thể kết nối database"). mysqli_error($conn);
	}
	
 ?>