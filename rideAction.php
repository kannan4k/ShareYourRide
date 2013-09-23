<?php
 session_start();

	$ride_from = $_POST['from']; 
	$ride_to   = $_POST['to'];
	$ride_time = $_POST['ride_time']; 

	$fuel = "";

	/* Including the database configuration file */
	require("config/Database.php");
	$user_id= $_SESSION['userId'];

	


	// Insert Query for members table
	$insert_query ="insert into ride(ride_from,ride_to,ride_time) VALUES('".$ride_from."','".$ride_to."','".$ride_time."')";
	
	mysql_query($insert_query) or die('query not processed (Duplicate  entry) or contact admin');

	$ride_id = mysql_insert_id();

	$insert_query ="insert into rider(ride_id,user_id) VALUES('".$ride_id."','".$user_id."')";
	
	mysql_query($insert_query) or die('query not processed (Duplicate  entry) or contact admin');

	header("location:trips.php?e=1");

	



		
?>
