

<?php 
include 'head.php';
require 'core.php';
//require 'trial.php';



if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
{
$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";
$name= $_SESSION['name'];
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
$query="select * from `$name` group by fid";
$query_run=mysql_query($query);
if($query_run)
{

$query1="select Faculty_id from courseinfo group by Faculty_id ";
$query_run1=mysql_query($query1);
if($query_run1)
{
echo '<table>
<tr>
<th></th>
<th>Faculty id</th>
<th></th>
</tr>';

while($row=mysql_fetch_assoc($query_run1)){
/*foreach($row as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }*/
//$cno= $row['cno'];
//$cname=$row['cname'];
$fid=$row['Faculty_id'];


echo 
"<center>
<tr>
<th></th>
<th>$fid</th>
<th><a href='vfeed.php?var=$fid' onclick='this.onclick=function(){return false;}'> View Courses </a></th>
</tr>
</center>
";

}

echo '</table>';
}
else
{echo 'Query Failed';}
}


else
{

echo '<center>
<p style="font-size:20px"> You cant view this feedback!!!</p>
</center>
';
}



}


?>


