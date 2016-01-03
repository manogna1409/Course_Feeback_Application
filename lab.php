<?php include 'head.php'; 
require "core.php";
?>

<?php
$username=$_SESSION['user_name'];
$syear=$_SESSION['syear'];
$ssem=$_SESSION['ssem'];
$name="feedback".$syear.$ssem;
$str=$_GET['var'];
//echo $str;
$string=explode(',',$str);
$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";
$err="";
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$query="select courseno,rollno from `$name` where rollno='$username' and courseno='$string[0]'";
$query_run=mysql_query($query);
if($query_run)
{
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==1)
{
echo 'You have already entered feedback for this course!!!!!';
die($err);
}
}
else
{echo 'Query failed';}
}
if(isset($_POST['l1']) && isset($_POST['l2']) && isset($_POST['l3']) && isset($_POST['l4']) && isset($_POST['l5']) && isset($_POST['l6']) && isset($_POST['l7'])
&& isset($_POST['l8']) && isset($_POST['l9']) && isset($_POST['l10']) && isset($_POST['l11']) && isset($_POST['l12']) && isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3'])
&& isset($_POST['c4']) && isset($_POST['c5']) && isset($_POST['c6']))
{

$f1=$_POST['l1'];
$f2=$_POST['l2'];
$f3=$_POST['l3'];
$f4=$_POST['l4'];
$f5=$_POST['l5'];
$f6=$_POST['l6'];
$f7=$_POST['l7'];
$f8=$_POST['l8'];
$f9=$_POST['l9'];
$f10=$_POST['l10'];
$f11=$_POST['l11'];
$f12=$_POST['l12'];

$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];
if(!empty($f1) && !empty($f2) && !empty($f3) && !empty($f4) && !empty($f5) && !empty($f6) && !empty($f7) && !empty($f8) && !empty($f9) && !empty($f10) && !empty($f11) && !empty($f12) && !empty($c1) && !empty($c2) && !empty($c3)
&& !empty($c4) && !empty($c5) && !empty($c6))
{
$_SESSION['1']=$f1;
$_SESSION['l2']=$f2;
$_SESSION['l3']=$f3;
$_SESSION['l4']=$f4;
$_SESSION['l5']=$f5;
$_SESSION['l6']=$f6;
$_SESSION['l7']=$f7;
$_SESSION['l8']=$f8;
$_SESSION['l9']=$f9;
$_SESSION['l10']=$f10;

$_SESSION['l11']=$f11;
$_SESSION['l12']=$f12;
$_SESSION['c1']=$c1;
$_SESSION['c2']=$c2;
$_SESSION['c3']=$c3;
$_SESSION['c4']=$c4;
$_SESSION['c5']=$c5;
$_SESSION['c6']=$c6;

$_SESSION['c_no']=$string[0];
$_SESSION['f_id']=$string[1];
header('Location:complete.php');
}
else
{
echo 'You must supply all the fields ';
}
}


?>




<html>
<head>
<title>feedback</title>
</head>
<body>
<br></br>

<center>
<h1>LAB EVALUATION </h1>
</center>
<br></br>
<form method="post" action="">
Q.01. The objective of each experiment was stated clearly in advance. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
<input type = "radio" name = "l1" value = "10">10
<input type = "radio" name = "l1" value = "9">9
<input type = "radio" name = "l1" value = "8">8
<input type = "radio" name = "l1" value = "7">7
<input type = "radio" name = "l1" value = "6">6
<input type = "radio" name = "l1" value = "5">5
<input type = "radio" name = "l1" value = "4">4
<br></br>


Q.02. Lab experiment is in accordance with the theory taught.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "l2" value = "10">10
<input type = "radio" name = "l2" value = "9">9
<input type = "radio" name = "l2" value = "8">8
<input type = "radio" name = "l2" value = "7">7
<input type = "radio" name = "l2" value = "6">6
<input type = "radio" name = "l2" value = "5">5
<input type = "radio" name = "l2" value = "4">4
<br></br>

Q.03. I could appreciate the theory while doing the experiment.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "l3" value = "10">10
<input type = "radio" name = "l3" value = "9">9
<input type = "radio" name = "l3" value = "8">8
<input type = "radio" name = "l3" value = "7">7
<input type = "radio" name = "l3" value = "6">6
<input type = "radio" name = "l3" value = "5">5
<input type = "radio" name = "l3" value = "4">4
<br></br>

Q.04. Experiments are carefully designed for the entire duration.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "l4" value = "10">10
<input type = "radio" name = "l4" value = "9">9
<input type = "radio" name = "l4" value = "8">8
<input type = "radio" name = "l4" value = "7">7
<input type = "radio" name = "l4" value = "6">6
<input type = "radio" name = "l4" value = "5">5
<input type = "radio" name = "l4" value = "4">4
<br></br>

Q.05. Lab Experiments are of sufficient standard and improved my learning.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "l5" value = "10">10
<input type = "radio" name = "l5" value = "9">9
<input type = "radio" name = "l5" value = "8">8
<input type = "radio" name = "l5" value = "7">7
<input type = "radio" name = "l5" value = "6">6
<input type = "radio" name = "l5" value = "5">5
<input type = "radio" name = "l5" value = "4">4
<br></br>

Q.06. The faculty is knowledgeable in this area.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;&nbsp;
<input type = "radio" name = "l6" value = "10">10
<input type = "radio" name = "l6" value = "9">9
<input type = "radio" name = "l6" value = "8">8
<input type = "radio" name = "l6" value = "7">7
<input type = "radio" name = "l6" value = "6">6
<input type = "radio" name = "l6" value = "5">5
<input type = "radio" name = "l6" value = "4">4
<br></br>

Q.07. The faculty was available and interactive.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
<input type = "radio" name = "l7" value = "10">10
<input type = "radio" name = "l7" value = "9">9
<input type = "radio" name = "l7" value = "8">8
<input type = "radio" name = "l7" value = "7">7
<input type = "radio" name = "l7" value = "6">6
<input type = "radio" name = "l7" value = "5">5
<input type = "radio" name = "l7" value = "4">4
<br></br>

Q.08. The faculty provide constructive feedback on assignments and exams.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "l8" value = "10">10
<input type = "radio" name = "l8" value = "9">9
<input type = "radio" name = "l8" value = "8">8
<input type = "radio" name = "l8" value = "7">7
<input type = "radio" name = "l8" value = "6">6
<input type = "radio" name = "l8" value = "5">5
<input type = "radio" name = "l8" value = "4">4
<br></br>

Q.09. The faculty stimulates my interest in the subject.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "l9" value = "10">10
<input type = "radio" name = "l9" value = "9">9
<input type = "radio" name = "l9" value = "8">8
<input type = "radio" name = "l9" value = "7">7
<input type = "radio" name = "l9" value = "6">6
<input type = "radio" name = "l9" value = "5">5
<input type = "radio" name = "l9" value = "4">4
<br></br>

Q.10. Sufficient computers/lab kits/equipments are available and are of good quality.&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "l10" value = "10">10
<input type = "radio" name = "l10" value = "9">9
<input type = "radio" name = "l10" value = "8">8
<input type = "radio" name = "l10" value = "7">7
<input type = "radio" name = "l10" value = "6">6
<input type = "radio" name = "l10" value = "5">5
<input type = "radio" name = "l10" value = "4">4
<br></br>

Q.11. Lab assistants were available in case of help.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "l11" value = "10">10
<input type = "radio" name = "l11" value = "9">9
<input type = "radio" name = "l11" value = "8">8
<input type = "radio" name = "l11" value = "7">7
<input type = "radio" name = "l11" value = "6">6
<input type = "radio" name = "l11" value = "5">5
<input type = "radio" name = "l11" value = "4">4
<br></br>

Q.12. Lab Ambiance was good enough to carry out the experiment.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
<input type = "radio" name = "l12" value = "10">10
<input type = "radio" name = "l12" value = "9">9
<input type = "radio" name = "l12" value = "8">8
<input type = "radio" name = "l12" value = "7">7
<input type = "radio" name = "l12" value = "6">6
<input type = "radio" name = "l12" value = "5">5
<input type = "radio" name = "l12" value = "4">4
<br></br>

<center>
<h1>COURSE EVALUATION </h1>
</center>
<br></br>

Q.01. Course contents are well planned and organized.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "c1" value = "10">10
<input type = "radio" name = "c1" value = "9">9
<input type = "radio" name = "c1" value = "8">8
<input type = "radio" name = "c1" value = "7">7
<input type = "radio" name = "c1" value = "6">6
<input type = "radio" name = "c1" value = "5">5
<input type = "radio" name = "c1" value = "4">4
<br></br>

Q.02. I gained a good understanding of concepts/principles in the field.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&nbsp;
<input type = "radio" name = "c2" value = "10">10
<input type = "radio" name = "c2" value = "9">9
<input type = "radio" name = "c2" value = "8">8
<input type = "radio" name = "c2" value = "7">7
<input type = "radio" name = "c2" value = "6">6
<input type = "radio" name = "c2" value = "5">5
<input type = "radio" name = "c2" value = "4">4
<br></br>

Q.03. I received an adequate overview of this field to meet my professional goals.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "c3" value = "10">10
<input type = "radio" name = "c3" value = "9">9
<input type = "radio" name = "c3" value = "8">8
<input type = "radio" name = "c3" value = "7">7
<input type = "radio" name = "c3" value = "6">6
<input type = "radio" name = "c3" value = "5">5
<input type = "radio" name = "c3" value = "4">4

<br></br>

Q.04. The amount of material covered in this course is reasonable.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
<input type = "radio" name = "c4" value = "10">10
<input type = "radio" name = "c4" value = "9">9
<input type = "radio" name = "c4" value = "8">8
<input type = "radio" name = "c4" value = "7">7
<input type = "radio" name = "c4" value = "6">6
<input type = "radio" name = "c4" value = "5">5
<input type = "radio" name = "c4" value = "4">4

<br></br>

Q.05. The amount of work required is appropriate for the credit received.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
<input type = "radio" name = "c5" value = "10">10
<input type = "radio" name = "c5" value = "9">9
<input type = "radio" name = "c5" value = "8">8
<input type = "radio" name = "c5" value = "7">7
<input type = "radio" name = "c5" value = "6">6
<input type = "radio" name = "c5" value = "5">5
<input type = "radio" name = "c5" value = "4">4


<br></br>

Q.06. Assignments are interesting and make students think.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "c6" value = "10">10
<input type = "radio" name = "c6" value = "9">9
<input type = "radio" name = "c6" value = "8">8
<input type = "radio" name = "c6" value = "7">7
<input type = "radio" name = "c6" value = "6">6
<input type = "radio" name = "c6" value = "5">5
<input type = "radio" name = "c6" value = "4">4

<br></br>


<br></br>



<br></br>
<center>
<input type="submit" name="submit">
</center>
</form>
