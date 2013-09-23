<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/united/ -->
<?php 
  /* To read value from the query string we use GET method */
   session_start();
  if(!isset($_SESSION['userName'])){
  }
  else
  {
    header("location:new.php");
  }

  $error="";
  if(isset($_GET['e'])){
    $error = $_GET['e'];
  }
  $errorMessage="";
  switch($error){
    case 1: $errorMessage=" Best check yourself, your Email and Password is not Matching";
        break;
    case 2: $errorMessage=" <strong>Sorry!</strong> Please Enter your Email and password!!!";
        break;
    case 3: $errorMessage="<center>Thank you<center>";
        break;
    case 4: $errorMessage="Registration Successful";
        break;
    case 5: $errorMessage="Entered mail id is already registered with us! Please contact Admin!!!";
        break;
    case 6: $errorMessage="Password has been successfully changed";
        break;
  }
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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Registration</a></li>
          </ul>
         

        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->




<div class="well">

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
    </div>
    <div class="span6">
      
         
          <?php 
          if(isset($_GET['e'])){ 
          echo "<div class='alert alert-success'>";
          echo $errorMessage;
          echo "</div>";
        }
          ?>
      </div>
    </div>
    <div class="span3">
    </div>
  </div>




  <form class="form-horizontal" action="loginAction.php" method="POST">
        <br>
        <div class="control-group">

           <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="text" id="inputEmail" name="username"/>
          </div>
        </div>
        <div class="control-group">
           <label class="control-label" for="inputPassword">Password</label>
          <div class="controls">
            <input type="password" id="inputPassword" name="passwd" />
          </div>
        </div>


         <div class="control-group">
         
          <div class="controls">
          	<button type="submit" class="btn btn-success">Sign in</button>
          </div>
        </div>
          


   </form>
</div>
 </div>
</body>


 <div id="footer">
      <div class="container">
        <p class="muted credit">Powered By <a href="http://localhost/share">EarthWorms</a>.</p>
      </div>
    </div>


    
</html>