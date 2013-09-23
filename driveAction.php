<?php
 session_start();

	$ride_from = $_POST['from']; 
	$ride_to   = $_POST['to'];
	$ride_time = $_POST['ride_time']; 
	$ride_distance   = $_POST['ride_distance']; 
	$seats   = $_POST['seats'];
	$fuel = "";

	/* Including the database configuration file */
	require("config/Database.php");
	$user_id= $_SESSION['userId'];

	


	// Insert Query for members table
	$insert_query ="insert into ride(ride_from,ride_to,ride_time,ride_distance) VALUES('".$ride_from."','".$ride_to."','".$ride_time."','".$ride_distance."')";
	
	mysql_query($insert_query) or die('query not processed (Duplicate  entry) or contact admin');

	$ride_id = mysql_insert_id();

	$insert_query ="insert into driver(ride_id,user_id,seats,fuel) VALUES('".$ride_id."','".$user_id."','".$seats."','".$fuel."')";
	
	mysql_query($insert_query) or die('query not processed (Duplicate  entry) or contact admin');

	header("location:trips.php?e=1");

	



		
?>
