<?php 
  /* To read value from the query string we use GET method */
  $error="";
  if(isset($_GET['e'])){
    $error = $_GET['e'];
  }
  $errorMessage="";
  switch($error){
    case 1: $errorMessage=" Request Sent Successfully!";
        break;

  }
?>


<?php
include "header.php";


session_start();

	require("config/Database.php");
	$user_id= $_SESSION['userId'];

	$query = "select * from  ride where ride_id in (select ride_id from driver)";

	
		$resultSet = mysql_query($query) or die("unable to execute a query");
		

		$resultObject = mysql_fetch_object($resultSet);
		

?>

<div class="well">
  <h2>
      <center> Matched Requests <br><br> </h2>
    <?php 
          if(isset($_GET['e'])){ 
          echo "<div class='alert alert-success'>";
          echo $errorMessage;
          echo "</div>";
        }
?>

<section id="tables">  
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
      	<th>Name</th>
      	<th>Mobile</th>
        <th>From</th>
        <th>To</th>
        <th>Time</th>
        <th>Request</th>
      </tr>
    </thead>
    <tbody>

    	   <tr>
      	<th>Dinesh</th>
      	<th>9003688850</th>
        <th>Olympia Tech Park, Chennai, Tamil Nadu, India</th>
        <th>Anna Nagar West, Chennai, Tamil Nadu, India</th>
        <th>2013-07-06 22:00:00</th>
        <th><a href="notifications.php?e=1" class="btn btn-success">Send</a></th>
      </tr>

    	

    </tbody>
  </table>
</section>



      </center>
       <br><br>
 
 </div>

 
       <br><br>
  
 </div>

</body>

 <div id="footer">
      <div class="container">
        <p class="muted credit">Powered By <a href="http://localhost/share">EarthWorms</a>.</p>
      </div>
    </div>

    
</html>