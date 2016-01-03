<?php
require 'core.php'; 
include 'head.php';

echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";

if(isset($_POST['year']) && isset($_POST['sem'])) 
{
$year=$_POST['year'];
$sem=$_POST['sem'];
$_SESSION['year']=$year;
$_SESSION['sem']=$sem;


if($_SESSION['tab']=='y')
{
$name="feedback".$year.$sem;
$_SESSION['name']=$name;

header('Location:admin1-2.php');
}

if($_SESSION['feed']=='y')
{
$name="feedback".$year.$sem;

$_SESSION['name']=$name;
header('Location:fac.php');
}

}
?>

<div id=inputs>
<center>
<form method ="post" action = <?php echo $current_file; ?> >
   Year: <input type="text" name="year">  <br/><br/>
   Semester:<select name = "sem">
<option value = "odd">odd</option>
<option value = "even">even</option> 
</select> <br/><br/>
 
 <input type="submit" name="submit" value="Submit"> 
</form>
</center>