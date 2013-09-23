<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/united/ -->

<?php
  /*To authenti*/
  session_start();
  if(!isset($_SESSION['userName'])){
    header("location:login.php?e=2");
  }




  require("config/Database.php");
  $user_id= $_SESSION['userId'];

  $query = "select count(*) cnt from  rider";

  
    $resultSet = mysql_query($query) or die("unable to execute a query");
  $resultObject = mysql_fetch_object($resultSet)
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Share Your Ride</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ubuntu orange and unique font.">
    <meta name="author" content="Thomas Park">
    <link href="css/bootstrap1.min.css" rel="stylesheet">
    <link href="css/brand.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
   
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>

  
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>

   </style></head>


<body>
<div class="container">
 
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.php">Share Your Ride</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="new.php">New</a></li>
            <li><a href="trips.php">Trips</a></li>
          </ul>
         

          <ul class="nav pull-right">
            <li>
<?php

if($_SESSION['userName']=="Dinesh")
{
  echo "<a href='notifications1.php'>";
}
else
  {
    echo "<a href='notifications.php'>";
  }
?>

              Notification: <?php echo $resultObject->cnt;  ?></a></li>
            <li class="divider-vertical"></li>
             <li>

<a href="#">Welcome : <?php echo ucfirst($_SESSION['userName']);?>&nbsp;</a>
        </li>
        <li class="divider-vertical"></li>
 <li>

<a href="logout.php">Logout</a>
        </li>

          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->