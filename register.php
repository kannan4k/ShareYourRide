<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/united/ -->

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
    <!-- jQuery via Google + local fallback, see h5bp.com -->
    <script src="assets/js/jquery-1.7.1.min.js"></script>

<!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

<!-- Validate plugin -->
    <script src="assets/js/jquery.validate.min.js"></script>

<!-- Scripts specific to this page -->
    <script src="assets/js/script.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
 

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

<form action="registration_add.php" id="contact-form" method="post" class="form-horizontal">
              <fieldset>
                <legend>Register here:</legend>

                <div class="control-group">
                  <label class="control-label" for="name">Name</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="firstname" id="firstname">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="email">Email Address</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="emailid" id="emailid">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="mobile">Mobile</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="mobile" id="mobile">
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label" for="subject">Password</label>
                  <div class="controls">
                    <input type="password" class="input-xlarge" name="password" id="password">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="subject"> Retype Password</label>
                  <div class="controls">
                    <input type="password" class="input-xlarge" name="retypepassword" id="subject">
                  </div>
                </div>
               
               <div class="control-group">
                  <label class="control-label" >Gender</label>
                  <div class="controls">
                    <select title="Select any One"  id="gender" name="gender" > 
                <option value="" SELECTED > Select One </option> 
                <option title="Male" value="m"   >Male</option> 
                <option title="Female" value="f"   >Female</option> 
              </select> 
                  </div>
                </div>
                
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
              </fieldset>
            </form>

 </div>
</body>

 <div id="footer">
      <div class="container">
        <p class="muted credit">Powered By <a href="http://localhost/share">EarthWorms</a>.</p>
      </div>
    </div>

    
</html>