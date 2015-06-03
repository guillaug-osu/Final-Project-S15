<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_USER_NAME']);
	unset($_SESSION['SESS_PASSWORD']);
	unset($_SESSION['SESS_MY_TEAM']);
	unset($_SESSION['SESS_PHOTO']);
	
	session_destroy();
	
	header('Location: ../home.html'); 
?>