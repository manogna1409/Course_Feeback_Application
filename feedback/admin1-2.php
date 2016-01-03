<?php
require 'core.php'; 
include 'head.php';


if(isset($_SESSION['year']) && isset($_SESSION['year']))
{
//echo "enter 0";
$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";
$year=$_SESSION['year'];
$sem=$_SESSION['sem'];

$name='feedback'.$year.$sem;
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{

die($con_error);
}
else
{

$name='feedback'.$year.$sem;

$query="create table `{$name}`(rollno varchar(15) not null,courseno varchar(10),fid varchar(15),q1 int(10),q2 int(10),q3 int(10),q4 int(10),q5 int(10),q6 int(10),q7 int(10),q8 int(10),q9 int(10),q10 int(10),q11 int(10),q12 int(10),q13 int(10)
,q14 int(10),q15 int(10),q16 int(10),q17 int(10),q18 int(10))";
$query_run=mysql_query($query);
if($query_run)
{
echo 'Table created';
}
else
{
echo '<center>Table Already exists</center>';
echo "<br />";
echo '<center>Email will not be sent</center>';

//header('Location:admin1.php');
}

if(isset($_POST['mail']) && !empty($_POST['mail']))
{
header('Location:mail.php');
}
}
}


?>
<center>
<form method ="post" action ="" >
  <br/><br/>
  <br/><br/>
 <input type='submit' name='mail' value='Generate email'> 
 <br/><br/>
 
 </form>
   </center>



