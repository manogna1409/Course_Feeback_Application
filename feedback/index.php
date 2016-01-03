
<?php 
require 'core.php'; 
include 'head.php';
?>
<link rel="stylesheet" type="text/css"  href = "trial.css">  
<br></br>
<br></br>
<span color='#707070 ' class='ttle'><center>Teacher-Course Feedback Form</center></span><br/><br/>


<?php 



if(isset($_POST['rollno']) && isset($_POST['pass']))
{
$username=$_POST["rollno"];
$password=$_POST["pass"];
//echo $password;
$password_hash=md5($password);

if(!empty($username) && !empty($password))
{

$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
echo "year: ".$_SESSION['pyear'];
echo "Sem: ".$_SESSION['psem'];


//echo 'sql connected';
$query="SELECT username FROM `userinfo` WHERE username='$username' and password='$password' and view='0'" ;
$query_run=mysql_query($query);
if($query_run)
{
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==0)
echo 'Invalid username,password combination';
else if($query_num_rows==1)
{
//echo 'ALL IZZ WELL';
$user_name=mysql_result($query_run,0,'username');
//echo $username;
//$squery = "UPDATE `user_info` SET `view`='1' WHERE username= '$username'";
//$squery_run=mysql_query($squery);

//echo 'you are logged in!';

$_SESSION['user_name']=$user_name;


$_SESSION['syear']=$_SESSION['pyear'];
$_SESSION['ssem']=$_SESSION['psem'];

//echo $_SESSION['pyear'];
//echo $_GET['year'];

header("Location: form1.php");

}
//echo 'OK';
}
else
{
echo 'Query failed';
}
}

}
else
{
echo 'You must supply username and password';
}
}


$input=$_GET['var'];
//echo $input;
$iparr=explode(',',$input);
$pyear=$iparr[0];
//echo $pyear;
$psem=$iparr[1];
//echo $psem;
$_SESSION['pyear']=$pyear;
$_SESSION['psem']=$psem;
//echo $_SESSION['pyear'];
//echo $_SESSION['psem'];


?>


<div id=inputs>
<center>
<p><span class="error">* required field.</span></p>
    <form method="post" action="" >
   Rollno: <input type="text" name="rollno">
   <span class="error">* <?php //echo $rollnoErr;?></span>
   <br><br>
   Password: <input type="password" name="pass">
   <span class="error">* <?php //echo $passErr;?></span> 
   <br><br>
   
   <input type="submit" name="submit" value="Submit">
</form>
</center>


