<?php 
include 'head.php';
require 'core.php';

?>

<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
Your form is successfully submitted
</center>


<?php

$f1=$_SESSION['n1'];
$f2=$_SESSION['n2'];
$f3=$_SESSION['n3'];
$f4=$_SESSION['n4'];
$f5=$_SESSION['n5'];
$f6=$_SESSION['n6'];
$f7=$_SESSION['n7'];
$f8=$_SESSION['n8'];
$f9=$_SESSION['n9'];
$f10=$_SESSION['n10'];

$c1=$_SESSION['c1'];
$c2=$_SESSION['c2'];
$c3=$_SESSION['c3'];
$c4=$_SESSION['c4'];
$c5=$_SESSION['c5'];
$c6=$_SESSION['c6'];
$c7=$_SESSION['c7'];
$c8=$_SESSION['c8'];


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
$syear=$_SESSION['syear'];
$ssem=$_SESSION['ssem'];
$name="feedback".$syear.$ssem;
echo $name;
$username=$_SESSION['user_name'];
$cno=$_SESSION['c_no'];
$fid=$_SESSION['f_id'];


$query="INSERT INTO `$name` (`rollno`, `courseno`, `fid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`,`q17`,`q18`) VALUES ('$username','$cno','$fid','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8')";
$query_run1=mysql_query($query);
if($query_run1)
{//echo 'Query Success';
}
else
{
echo 'Query Failed2';
}
}

?>
