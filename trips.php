<?php
include "header.php";


session_start();

	require("config/Database.php");
	$user_id= $_SESSION['userId'];

	$query = "select * from  ride where ride_id in (select ride_id from driver where user_id='".$user_id."')";

	
		$resultSet = mysql_query($query) or die("unable to execute a query");
		

		
		

?>

<div class="well">
  <h2>
      <center> Driving  <br><br> </h2>


<section id="tables">  
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>From</th>
        <th>To</th>
        <th>Time</th>
        <th>Distance</th>
      </tr>
    </thead>
    <tbody>

    		<?php 

				while($resultObject = mysql_fetch_object($resultSet))
		{
				echo "<tr>";
				echo "<td>";
				echo $resultObject->ride_from; 
				echo "</td>";


				echo "<td>";
				echo $resultObject->ride_to; 
				echo "</td>";


				echo "<td>";
				echo $resultObject->ride_time; 
				echo "</td>";


				echo "<td>";
				echo $resultObject->ride_distance; 
				echo "</td>";

				echo "</tr>";

		}
			?>

    </tbody>
  </table>
</section>



      </center>
       <br><br>
 
 </div>

 <?php
		$query = "select * from  ride where ride_id in (select ride_id from rider where user_id='".$user_id."')";

	
		$resultSet = mysql_query($query) or die("unable to execute a query");
		


 ?>
 <div class="well">
  <h2>
      <center> Traveling  <br><br>

</h2>

<section id="tables">  
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>From</th>
        <th>To</th>
        <th>Time</th>
        <th>Distance</th>
      </tr>
    </thead>
    <tbody>

    		<?php 

				while($resultObject = mysql_fetch_object($resultSet))
		{
				echo "<tr>";
				echo "<td>";
				echo $resultObject->ride_from; 
				echo "</td>";


				echo "<td>";
				echo $resultObject->ride_to; 
				echo "</td>";


				echo "<td>";
				echo $resultObject->ride_time; 
				echo "</td>";


				echo "<td>";
				echo $resultObject->ride_distance; 
				echo "</td>";

				echo "</tr>";

		}
			?>

    </tbody>
  </table>
</section>

</center>
       <br><br>
  
 </div>

</body>
</html>