

<?php 
include 'head.php';
require 'core.php';
//require 'trial.php';

$temp=$_GET['var'];
//echo $temp;
//$_SESSION['fac_id']=$temp;

//$name=$_SESSION['name'];
//echo $name;
if($_SESSION['sem']=="odd")
{ 
$csem=1;
$csem1=3;
$csem2=5;
$csem3=7;
}
else if($_SESSION['sem']=="even")
{
$csem=2;
$csem1=4;
$csem2=6;
$csem3=8;
}

//echo $csem;
if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
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
$query="SELECT cname,cno 
FROM  `courseinfo` 
WHERE Faculty_id =  '$temp'
AND semester
IN ( '$csem', '$csem1', '$csem2', '$csem3') ";

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
<th width='30%'>COURSE NUMBER </th>
<th>COURSES OFFERED</th>
<th></th>
</tr>
";

while($row=mysql_fetch_assoc($query_run)){

$cno= $row['cno'];
$cname=$row['cname'];

echo 
"<center>
<tr>
<th></th>
<th>$cno</th>
<th>$cname</th>
</center>";

$l=substr($cno,(strlen($cno)-1));
//echo $l;

if($l=='P')
{
echo "<center><th><a href='labavg.php?var=$cno,$temp' > View Lab Feedback </a></th>
</tr>
</center>";
}
else
{
echo "<center><th><a href='avg.php?var=$cno,$temp' > View Feedback </a></th>
</tr>
</center>";
}
}
echo '</table>';
echo '</center>';

}
else
{echo 'Query Failed';}
}
}




?>




