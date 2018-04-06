<?php
	$empno=$_POST['empno'];
	$password=md5($_POST['password']);
	
	include ("inc/dbconn.php");
	$sql="SELECT * FROM adminusers 
			WHERE EMPNO='$empno' AND 
			PASSWORD='$password' ";
	$rs=mysqli_query($db, $sql);
	if (mysqli_num_rows($rs)==1){
		header("location: search.php");
	}
	else{
		header("location: login.php");
	}
?>