<?php
require 'core.php'; 
include 'head.php';

if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
{
if(!empty($_POST['tab']))
{
$_SESSION['tab']='y';
header('Location:admin1-1.php');
}
else
{
$_SESSION['tab']='n';
}

if(!empty($_POST['feed']))
{
$_SESSION['feed']='y';
header('Location:admin1-1.php');
}
else
{
$_SESSION['feed']='n';
}
}

else
{echo "by";}
?>

<div id=inputs>
<center>
<form method ="post" action = <?php echo $current_file; ?> >
  <br/><br/>
  <br/><br/>
 <input type="submit" name="tab" value="Create table"> 
 <br/><br/>
 <input type="submit"  name="feed" value="View feedback">
 </form>
   </center>
  
  
   
   