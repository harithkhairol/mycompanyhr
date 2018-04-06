<?php
//this script is to check session to verify user login
session_start();
	if(!isset($_SESSION["empno"])){ //if session NOT set
		//not logged in
		//redirect to login form
		header ("location: public-not-login.php");
		//echo "You are not logged in,
		//<a href='login-form.php'>click here to login.</a>";
		//exit(0);
	}
?>