<?php
	//登陆
	$lname = $_POST['lname'];  
	$lpwd = $_POST['lpwd'];  
	$conn = new mysqli("localhost","root","","ku");
	$lres = $conn->query("select * from biao where name='".$lname."'");
	$lrow = $lres->fetch_row();
	if($lrow){
		if($lrow[2] == $lpwd){
			echo 1;
		}else{
			echo 2;
			}
	}else{
		echo 0;
	}
?>