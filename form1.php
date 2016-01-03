

<?php 
include 'head.php';
//require 'core.php';
//require 'trial.php';
session_start();



if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
{
$username=$_SESSION['user_name'];
//echo $username;

$pyear=$_SESSION['syear'];
$psem=$_SESSION['ssem'];
//echo $pyear;
//echo $psem;
$temp=substr($username,0,3);
$temp1=$username[3].$username[4];
//echo $temp1;
$temp2=substr($pyear,1);
//echo $temp2;
$cyear=$temp2-$temp1;
//echo $cyear;

if($cyear==1 && $psem=="odd")
$csem=1;
else if($cyear==1 && $psem=="even")
$csem=2;
else if($cyear==2 && $psem=="odd")
$csem=3;
else if($cyear==2 && $psem=="even")
$csem=4;
else if($cyear==3 && $psem=="odd")
$csem=5;
else if($cyear==3 && $psem=="even")
$csem=6;
else if($cyear==4 && $psem=="odd")
$csem=7;
else if($cyear==4 && $psem=="even")
$csem=8;

//echo $csem;
$_SESSION['csem']=$csem;
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

$query="select distinct cno,cname,Faculty_id from courseinfo where semester='$csem' and dept='$temp'";
$query_run=mysql_query($query);
if($query_run)
{
echo "
<br>
<br>
<center>
<table width='700'>
<tr>
<th></th>
<th width='30%'>COURSE NUMBER</th>
<th>COURSE NAME</th>
<th>FACULTY ID</th>
<th></th>
</tr>";

while($row=mysql_fetch_assoc($query_run))
{
/*foreach($row as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }*/
$cno= $row['cno'];
$cname=$row['cname'];
$fid=$row['Faculty_id'];

echo 
"<center>
<tr>
<th></th>
<th>$cno</th>
<th>$cname</th>
<th>$fid</th>
</center>";

$l=substr($cno,(strlen($cno)-1));
//echo $l;
if($l=='P')
{
echo "<center><th><a href='lab.php?var=$cno,$fid' onclick='this.onclick=function(){return false;}'> Enter Feedback </a></th>
</tr>
</center>";
}
else
{
echo "<center><th><a href='cfeed.php?var=$cno,$fid' onclick='this.onclick=function(){return false;}'> Enter Feedback </a></th>
</tr>
</center>";
}

//";



}



echo '</table>';
echo '</center>';
}

else
{
echo 'Query Failed';
}
}

}


?>


