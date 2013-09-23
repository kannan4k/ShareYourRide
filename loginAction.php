<?php

	/**
		loginAction.php, After  a user entering his user name and
		password, those information would be posted  this page using 
		POST method.

		HTTP methods 
			POST and GET are widely used methods.
   	
	*/
	

	/*  Reading the form data from the request */
	$emailid = $_POST['username']; 
	$passwd   = $_POST['passwd']; 

	/* Including the database configuration file */
	require("config/Database.php");

	/* Framing the SQL query */
	$query = "select * from  user where user_email = '$emailid' and user_password = '$passwd'";

	if( strlen($emailid)!=0 && strlen($passwd)!=0 ){

		/* executing the query and return's the ResultSet on success */	
		$resultSet = mysql_query($query) or die("unable to execute a query");
		

		$resultObject = mysql_fetch_object($resultSet);
	}
	/* checking for validation */	
	if($resultObject->user_email == $emailid){

		session_start();
		$_SESSION['userName']=$resultObject->user_name;
		$_SESSION['userId']=$resultObject->user_id;
	/* URL redirection - redirect the page from the current page to the next*/
		echo "hi";
		header("location:new.php"); 	
		
	}else{
		header("location:login.php?e=1");
	}
		
?>
