<?php
    //Start session
   	session_start();
   	//Check whether the session variable SESS_MEMBER_ID is present or not
   	if(!isset($_SESSION['SESS_FIRST_NAME']) || (trim($_SESSION['SESS_FIRST_NAME']) == '')) {
   		header("location: index.php");
 	    	exit();
   	}
?>