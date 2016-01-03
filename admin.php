<?php
require 'core.php'; 
include 'head.php';
?>



<span color='#707070 ' class='ttle';><center>Admin Login</center></span><br/><br/>


  
<?php 
if(isset($_POST['id']) && isset($_POST['pass']))
{
$username=$_POST["id"];
$password=$_POST["pass"];
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
echo 'sql connected';
$query="SELECT ID FROM `admin_info` WHERE ID='$username' and password='$password'" ;
$query_run=mysql_query($query);
if($query_run)
{
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==0)
echo 'Invalid username,password combination';
else if($query_num_rows==1)
{
$user_name=mysql_result($query_run,0,'ID');
$_SESSION['user_name']=$user_name;
header('Location:admin1.php');

}

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

?>


<div id=inputs>
<center>
<p><span class="error">* required field.</span></p>
<form method="post" action=<?php echo $current_file; ?>  > 
   ID: <input type="text" name="id" >
   <span class="error">* </span>
   <br><br>
   Password: <input type="password" name="pass">
   <span class="error">* </span> 
   <br><br>
   
   <input type="submit" name="submit" value="Submit"> 
</form>
</center>


