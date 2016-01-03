<?php include 'head.php'; 
require "core.php";
?>

<html>
<head>
<title>feedback</title>
</head>
<body>
<br></br>

<center>
<h1>TEACHER EVALUATION </h1>
</center>

<BR></BR>


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
if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']) && isset($_POST['n4']) && isset($_POST['n5']) && isset($_POST['n6']) && isset($_POST['n7'])
&& isset($_POST['n8']) && isset($_POST['n9']) && isset($_POST['n10']) && isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3']) && isset($_POST['c4']) && isset($_POST['c5'])
&& isset($_POST['c6']) && isset($_POST['c7']) && isset($_POST['c8']))
{

$f1=$_POST['n1'];
$f2=$_POST['n2'];
$f3=$_POST['n3'];
$f4=$_POST['n4'];
$f5=$_POST['n5'];
$f6=$_POST['n6'];
$f7=$_POST['n7'];
$f8=$_POST['n8'];
$f9=$_POST['n9'];
$f10=$_POST['n10'];

$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];
$c7=$_POST['c7'];
$c8=$_POST['c8'];
if(!empty($f1) && !empty($f2) && !empty($f3) && !empty($f4) && !empty($f5) && !empty($f6) && !empty($f7) && !empty($f8) && !empty($f9) && !empty($f10) && !empty($c1) && !empty($c2) && !empty($c3) && !empty($c4) && !empty($c5)
&& !empty($c6) && !empty($c7) && !empty($c8))
{
$_SESSION['n1']=$f1;
$_SESSION['n2']=$f2;
$_SESSION['n3']=$f3;
$_SESSION['n4']=$f4;
$_SESSION['n5']=$f5;
$_SESSION['n6']=$f6;
$_SESSION['n7']=$f7;
$_SESSION['n8']=$f8;
$_SESSION['n9']=$f9;
$_SESSION['n10']=$f10;

$_SESSION['c1']=$C1;
$_SESSION['c2']=$c2;
$_SESSION['c3']=$c3;
$_SESSION['c4']=$c4;
$_SESSION['c5']=$c5;
$_SESSION['c6']=$c6;
$_SESSION['c7']=$c7;
$_SESSION['c8']=$c8;

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


<form method="post" action=" ">


Q.01  The lectures are well prepared. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "n1" value = "10">10
<input type = "radio" name = "n1" value = "9">9
<input type = "radio" name = "n1" value = "8">8
<input type = "radio" name = "n1" value = "7">7
<input type = "radio" name = "n1" value = "6">6
<input type = "radio" name = "n1" value = "5">5
<input type = "radio" name = "n1" value = "4">4
<br></br>


Q.02    The instructor communicates well and gave clear explanations.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "n2" value = "10">10
<input type = "radio" name = "n2" value = "9">9
<input type = "radio" name = "n2" value = "8">8
<input type = "radio" name = "n2" value = "7">7
<input type = "radio" name = "n2" value = "6">6
<input type = "radio" name = "n2" value = "5">5
<input type = "radio" name = "n2" value = "4">4
<br></br>
Q.03    The instructor motivates the student to learn the subject.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "n3" value = "10">10
<input type = "radio" name = "n3" value = "9">9
<input type = "radio" name = "n3" value = "8">8
<input type = "radio" name = "n3" value = "7">7
<input type = "radio" name = "n3" value = "6">6
<input type = "radio" name = "n3" value = "5">5
<input type = "radio" name = "n3" value = "4">4
<br></br>
Q.04    The instructor makes good use of examples and illustrations.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&thinsp;&nbsp;
<input type = "radio" name = "n4" value = "10">10
<input type = "radio" name = "n4" value = "9">9
<input type = "radio" name = "n4" value = "8">8
<input type = "radio" name = "n4" value = "7">7
<input type = "radio" name = "n4" value = "6">6
<input type = "radio" name = "n4" value = "5">5
<input type = "radio" name = "n4" value = "4">4
<br></br>
Q.05    The instructor effectively uses all the credit hours and completes the syllabus.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&thinsp;
<input type = "radio" name = "n5" value = "10">10
<input type = "radio" name = "n5" value = "9">9
<input type = "radio" name = "n5" value = "8">8
<input type = "radio" name = "n5" value = "7">7
<input type = "radio" name = "n5" value = "6">6
<input type = "radio" name = "n5" value = "5">5
<input type = "radio" name = "n5" value = "4">4
<br></br>

Q.06    The instructor acknowledges all questions as far as possible. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "n6" value = "10">10
<input type = "radio" name = "n6" value = "9">9
<input type = "radio" name = "n6" value = "8">8
<input type = "radio" name = "n6" value = "7">7
<input type = "radio" name = "n6" value = "6">6
<input type = "radio" name = "n6" value = "5">5
<input type = "radio" name = "n6" value = "4">4
<br></br>

Q.07 Examinations cover all the important aspects of the course.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
<input type = "radio" name = "n7" value = "10">10
<input type = "radio" name = "n7" value = "9">9
<input type = "radio" name = "n7" value = "8">8
<input type = "radio" name = "n7" value = "7">7
<input type = "radio" name = "n7" value = "6">6
<input type = "radio" name = "n7" value = "5">5
<input type = "radio" name = "n7" value = "4">4
<br></br>

Q.08 Examinations are grades very carefully and fairly.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "n8" value = "10">10
<input type = "radio" name = "n8" value = "9">9
<input type = "radio" name = "n8" value = "8">8
<input type = "radio" name = "n8" value = "7">7
<input type = "radio" name = "n8" value = "6">6
<input type = "radio" name = "n8" value = "5">5
<input type = "radio" name = "n8" value = "4">4
<br></br>

Q.09 Exam questions are challenging and not repetitive.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
<input type = "radio" name = "n9" value = "10">10
<input type = "radio" name = "n9" value = "9">9
<input type = "radio" name = "n9" value = "8">8
<input type = "radio" name = "n9" value = "7">7
<input type = "radio" name = "n9" value = "6">6
<input type = "radio" name = "n9" value = "5">5
<input type = "radio" name = "n9" value = "4">4
<br></br>

Q.10. Instructor is interactive and available.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
<input type = "radio" name = "n10" value = "10">10
<input type = "radio" name = "n10" value = "9">9
<input type = "radio" name = "n10" value = "8">8
<input type = "radio" name = "n10" value = "7">7
<input type = "radio" name = "n10" value = "6">6
<input type = "radio" name = "n10" value = "5">5
<input type = "radio" name = "n10" value = "4">4
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

Q.06. Assignments are interesting.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type = "radio" name = "c6" value = "10">10
<input type = "radio" name = "c6" value = "9">9
<input type = "radio" name = "c6" value = "8">8
<input type = "radio" name = "c6" value = "7">7
<input type = "radio" name = "c6" value = "6">6
<input type = "radio" name = "c6" value = "5">5
<input type = "radio" name = "c6" value = "4">4

<br></br>

Q.07. I developed plans to take additional related courses.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "c7" value = "10">10
<input type = "radio" name = "c7" value = "9">9
<input type = "radio" name = "c7" value = "8">8
<input type = "radio" name = "c7" value = "7">7
<input type = "radio" name = "c7" value = "6">6
<input type = "radio" name = "c7" value = "5">5
<input type = "radio" name = "c7" value = "4">4

<br></br>

Q.08. Assignments make students think.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type = "radio" name = "c8" value = "10">10
<input type = "radio" name = "c8" value = "9">9
<input type = "radio" name = "c8" value = "8">8
<input type = "radio" name = "c8" value = "7">7
<input type = "radio" name = "c8" value = "6">6
<input type = "radio" name = "c8" value = "5">5
<input type = "radio" name = "c8" value = "4">4


<br></br>
<center>
<input type="submit" name="submit">
</center>
</form>






</body>
</html>