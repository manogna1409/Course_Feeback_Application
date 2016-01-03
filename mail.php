<?php
require 'core.php'; 
include 'head.php';
require 'class.phpmailer.php';


function RandomPassword()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
	$fstring='';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
		$fstring=$randstring.$fstring;
    }
	
    return $fstring;
}

$year=$_SESSION['year'];
echo $year;
$sem=$_SESSION['sem'];
echo $sem;

try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled

	////$body             = file_get_contents('contents.html');
	//$body             = preg_replace('/\\\\/','', $body); //Strip backslashes

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure ="ssl";
	$mail->Port       = 465;                    // set the SMTP server port
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "manogna1409@gmail.com";     // SMTP server username
	$mail->Password   = "mano1274";            // SMTP server password

	//$mail->IsSendmail();  // tell the class to use Sendmail

	//$mail->AddReplyTo("name@domain.com","First Last");

	$mail->From       = "manogna1409@gmail.com";
	$mail->FromName   = "MMM solutions";

	//$add = array("coe11b027@iiitdm.ac.in");

$usernames=array("coe11b001","coe11b012","coe11b014","coe11b027");

$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";
$i=0;
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
for($i=1;$i<=count($usernames);$i=$i+1)
{
$user=$usernames[$i];
//echo $user;
$rand=RandomPassword();
//echo $rand;
$query="Insert into userinfo(`id`,`username`,`password`,`view`) values('$i+1','$user','$rand','0')";
$query_run=mysql_query($query);
if($query_run)
{echo "query Succeeded"
;}
else
{echo "Query Failed";}
}
}


$query2="select username,password from userinfo ";
$query_run2=mysql_query($query2);
if($query_run2)
{
$j=0;
while($row=mysql_fetch_assoc($query_run2))
{
$ip[$j]=$row['username'];
$ip2[$j]=$row['password'];
$j=$j+1;
}
}

for($k=0;$k<count($ip);$k++)
{
$add[$k]=$ip[$k]."@iiitdm.ac.in";
}


$p=0;
foreach($add as $a)
{
$mail->Body="password ".$ip2[$p]." <br /> Give feedback "." <a href='172.16.6.95/feedback/index.php?var=$year,$sem' >here</a>";
$mail->AddAddress($a);

	$mail->Subject  = "First PHPMailer Message";
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap
	$mail->IsHTML(true); // send as HTML

	if($mail->Send())
	 echo 'Message has been sent.';
	else
	 echo 'not sent!'.$mail->ErrorInfo;
$mail->ClearAddresses();
$p=$p+1;
}

}
 catch (phpmailerException $e) {
    echo "hi";
	echo $e->errorMessage();
}





?>