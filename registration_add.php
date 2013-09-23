<title>Registration Form</title>
<?php 

$firstname=$_REQUEST["firstname"];
$emailid=$_REQUEST["emailid"];
$password=$_REQUEST["password"];
$gender=ucfirst($_REQUEST["gender"]);
$mobile=$_REQUEST["mobile"];



//$path="vuv_molecule/reference_".$sno.".".$extension;

/*move_uploaded_file($_FILES['reference']['tmp_name'], $path);
$path1="vuv_molecule/spectral_".$sno.".".$extension1;
move_uploaded_file($_FILES['spectral']['tmp_name'], $path1);
echo $path;
echo $path1;*/

 //move_uploaded_file($_FILES["file"]["tmp_name"],
      //"upload_multiple/".$filename."_".$date.".xls");
//echo $strfname,$strlname,$stremail,$strpemail,$strmobile,$strlabno,$strecontact,$strdept,$strothers,$strraddress,$straddress,$strbiometric,$strstaff,$strproject,$strdoj,$strroom,$strcubical,$strblood,$strdob,$strsrno,$strbatch,$strfac1,$strfemail1,$strfdept1,$strflab1,$strfmobile1,$strfac2,$strfemail2,$strfdept2,$strflab2,$strfmobile2,$strfac3,$strfemail3,$strfdept3,$strflab3,$strfmobile3,$strfac4,$strfemail4,$strfdept4,$strflab4,$strfmobile4,$strfac5,$strfemail5,$strfdept5,$strflab5,$strfmobile5;

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = "shareyourride";
mysql_select_db($dbname);
$query="select * from user where user_email='".$emailid."'";
$resultSet = mysql_query($query) or die("unable to execute a query");
$resultObject = mysql_fetch_object($resultSet);

	if($resultObject->emailid == $emailid){
		header("location:login.php?e=5");
	}







// Insert Query for members table
$insert_query ="insert into user(user_name,user_email,user_password,user_gender,user_mobile) VALUES('".$firstname."','".$emailid."','".$password."','".$gender."','".$mobile."')";
	
	mysql_query($insert_query) or die('query not processed (Duplicate  entry) or contact admin');
header('Location: login.php?e=4');
//header('Location: molecularlist.php');
//header('Location: molecularlist.php');


//$update_query ="update vuv set molecular_name='".$molecular_name."',molecular_formula='".$molecular_formula."',ratio='".$ratio."',matrix='".$matrix."',temp='".$temp."',vuv_range='".$vuv_range."',wavenumber='".$wavenumber."',assignment='".$assignment."',mode='".$mode."',a_value='".$a_value."',density='".$density."' where sno=".$sno;
//echo $update_query;
//mysql_query($update_query) or die('query not processed (Duplicate Email/Biometric entry) or contact admin');	
?>