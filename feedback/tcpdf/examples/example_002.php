


<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('FEEDBACK');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,32,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));


$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";

$ip=$_GET['var'];
$res=explode(',',$ip);
$cno=$res[0];
$fac=$res[1];
$name=$res[2];
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=0;
$j=0;
$query="select avg(q1) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
$t1=$row['avg(q1)'];

}
}
$query="select avg(q1) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
$t2=$row['avg(q1)'];
}
$query="select avg(q2) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t3=$row['avg(q2)'];
$arr1[$i]=$t3;
}
$query="select avg(q2) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t4=$row['avg(q2)'];
$arr2[$j]=$t4;
}
$query="select avg(q3) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t5=$row['avg(q3)'];
$arr1[$i]=$t5;
}
$query="select avg(q3) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t6=$row['avg(q3)'];
$arr2[$j]=$t6;
}
$query="select avg(q4) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t7=$row['avg(q4)'];
$arr1[$i]=$t7;
}
$query="select avg(q4) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t8=$row['avg(q4)'];
$arr2[$j]=$t8;
}
$query="select avg(q5) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t9=$row['avg(q5)'];
$arr1[$i]=$t9;
}
$query="select avg(q5) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t10=$row['avg(q5)'];
$arr2[$j]=$t10;
}

$query="select avg(q6) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t11=$row['avg(q6)'];
$arr1[$i]=$t11;
}
$query="select avg(q6) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t12=$row['avg(q6)'];
$arr2[$j]=$t12;
}

$query="select avg(q7) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t13=$row['avg(q7)'];
$arr1[$i]=$t13;
}
$query="select avg(q7) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t14=$row['avg(q7)'];
$arr2[$j]=$t14;
}

$query="select avg(q8) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t15=$row['avg(q8)'];
$arr1[$i]=$t15;
}
$query="select avg(q8) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t16=$row['avg(q8)'];
$arr2[$j]=$t16;
}

$query="select avg(q9) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t17=$row['avg(q9)'];
$arr1[$i]=$t17;
}
$query="select avg(q9) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t18=$row['avg(q9)'];
$arr2[$j]=$t18;
}

$query="select avg(q10) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t19=$row['avg(q10)'];
$arr1[$i]=$t19;
}
$query="select avg(q10) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t20=$row['avg(q10)'];
$arr2[$j]=$t20;
}

$query="select avg(q11) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t21=$row['avg(q11)'];
$arr1[$i]=$t21;
}
$query="select avg(q11) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t22=$row['avg(q11)'];
$arr2[$j]=$t22;
}

$query="select avg(q12) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$i=$i+1;
$row=mysql_fetch_assoc($query_run);
$t23=$row['avg(q12)'];
$arr1[$i]=$t23;
}
$query="select avg(q12) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$j=$j+1;
$row=mysql_fetch_assoc($query_run);
$t24=$row['avg(q12)'];
$arr2[$j]=$t24;
}

$sum1=0;
$sum2=0; 
for($s=0;$s<count($arr1);$s++)
{
$sum1=$sum1+$arr1[$s];
}
$avg1=$sum1/count($arr1);
$avg1=round($avg1,2);

for($s=0;$s<count($arr2);$s++)
{
$sum2=$sum2+$arr2[$s];
}
$avg2=$sum2/count($arr2);
$avg2=round($avg2,2);

$k=0;
$l=0;
$query="select avg(q13) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
$t25=$row['avg(q13)'];
$arr3[$k]=$t25;
}
$query="select avg(q13) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
$t26=$row['avg(q13)'];
$arr4[$l]=$t26;
}

$query="select avg(q14) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$k=$k+1;
$row=mysql_fetch_assoc($query_run);
$t27=$row['avg(q14)'];
$arr3[$k]=$t27;
}
$query="select avg(q14) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$l=$l+1;
$row=mysql_fetch_assoc($query_run);
$t28=$row['avg(q14)'];
$arr4[$l]=$t28;
}

$query="select avg(q15) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$k=$k+1;
$row=mysql_fetch_assoc($query_run);
$t29=$row['avg(q15)'];

$arr3[$k]=$t29;
}
$query="select avg(q15) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$l=$l+1;
$row=mysql_fetch_assoc($query_run);
$t30=$row['avg(q15)'];
$arr4[$l]=$t30;
}

$query="select avg(q16) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$k=$k+1;
$row=mysql_fetch_assoc($query_run);
$t31=$row['avg(q16)'];
$arr3[$k]=$t31;
}
$query="select avg(q16) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$l=$l+1;
$row=mysql_fetch_assoc($query_run);
$t32=$row['avg(q16)'];
$arr4[$l]=$t32;
}

$query="select avg(q17) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$k=$k+1;
$row=mysql_fetch_assoc($query_run);
$t33=$row['avg(q17)'];
$arr3[$k]=$t33;
}
$query="select avg(q17) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$l=$l+1;
$row=mysql_fetch_assoc($query_run);
$t34=$row['avg(q17)'];
$arr4[$l]=$t34;
}

$query="select avg(q18) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{$k=$k+1;
$row=mysql_fetch_assoc($query_run);
$t35=$row['avg(q18)'];
$arr3[$k]=$t35;
}
$query="select avg(q18) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{$l=$l+1;
$row=mysql_fetch_assoc($query_run);
$t36=$row['avg(q18)'];

$arr4[$l]=$t36;
}

$sum3=0;
$sum4=0; 
for($s=0;$s<count($arr3);$s++)
{
$sum3=$sum3+$arr3[$s];
}
$avg3=$sum3/count($arr3);
$avg3=round($avg3,2);

for($s=0;$s<count($arr4);$s++)
{
$sum4=$sum4+$arr4[$s];
}
$avg4=$sum4/count($arr4);
$avg4=round($avg4,2);



$string='Welcome '.' '.$fac.'<br /> Course taken:'.$cno.' <br />
<br></br>

<table border="1" cellpadding="5" >

<tr>
<th style="width:50px;font-weight:bold"  >S.no</th>
<th style="width:350px;font-weight:bold">Teacher Evaluation</th>
<th style="width:100px;font-weight:bold">Teacher Mean</th>
<th style="width:100px;font-weight:bold">Institute mean</th>
</tr>


<tr>
<td>1</td>
<td>The objective of each experiment was stated clearly in advance.</td>
<td>'.$t1.'</td>
<td>'.$t2.'</td>
</tr>

<tr>
<td >2</td>
<td>Lab experiment is in accordance with the theory taught</td>
<td>'.$t3.'</td>
<td>'.$t4.'</td>
</tr>


<tr>
<td>3</td>
<td>I could appreciate the theory while doing the experiment.</td>
<td>'.$t5.'</td>
<td>'.$t6.'</td>
</tr>

<tr>
<td>4</td>
<td>Experiments are carefully designed for the entire duration.</td>
<td>'.$t7.'</td>
<td>'.$t8.'</td>
</tr>

<tr>
<td>5</td>
<td>Lab Experiments are of sufficient standard and improved my learning.</td>
<td>'.$t9.'</td>
<td>'.$t10.'</td>
</tr>


<tr>
<td>6</td>
<td>The faculty is knowledgeable in this area</td>
<td>'.$t11.'</td>
<td>'.$t12.'</td>
</tr> 

<tr>
<td>7</td>
<td>The faculty was available and interactive</td>
<td>'.$t13.'</td>
<td>'.$t14.'</td>
</tr> 

<tr>
<td>8</td>
<td>The faculty provide constructive feedback on assignments and exams.</td>
<td>'.$t15.'</td>
<td>'.$t16.'</td>
</tr> 

<tr>
<td>9</td>
<td>The faculty stimulates my interest in the subject</td>
<td>'.$t17.'</td>
<td>'.$t18.'</td>
</tr>

<tr>
<td>10</td>
<td>Sufficient computers/lab kits/equipments are available and are of good quality.</td>
<td>'.$t19.'</td>
<td>'.$t20.'</td>
</tr>

<tr>
<td>11</td>
<td>Lab assistants were available in case of help.</td>
<td>'.$t21.'</td>
<td>'.$t22.'</td>
</tr>

<tr>
<td>12</td>
<td>Lab Ambiance was good enough to carry out the experiment</td>
<td>'.$t23.'</td>
<td>'.$t24.'</td>
</tr>

<tr>
<td></td>
<th style="font-weight:bold" >Teacher Evaluation Average</th>
<td>'. $avg1.' </td>
<td>'.$avg2.' </td>
</tr>



<tr>
<td></td>
<th>COURSE EVALUATION</th>
<td></td>
<td></td>
</tr>





<tr>
<td>1</td>
<td> Course contents are well planned and organized.</td>
<td>'.$t25.'</td>
<td>'.$t26.'</td>
</tr>

<tr>
<td>2</td>
<td>I gained a good understanding of concepts/principles in the field</td>
<td>'.$t27.'</td>
<td>'.$t28.'</td>
</tr>

<tr>
<td>3</td>
<td>I received an adequate overview of this field to meet my professional goals</td>
<td>'.$t29.'</td>
<td>'.$t30.'</td>
</tr>

<tr>
<td>4</td>
<td>The amount of material covered in this course is reasonable</td>
<td>'.$t31.'</td>
<td>'.$t32.'</td>
</tr>

<tr>
<td>5</td>
<td>The amount of work required is appropriate for the credit received.</td>
<td>'.$t33.'</td>
<td>'.$t34.'</td>
</tr>

<tr>
<td>6</td>
<td>Assignments are interesting and make students think.</td>
<td>'.$t35.'</td>
<td>'.$t36.'</td>
</tr>

<tr>
<td></td>
<th  style="font-weight:bold" >Course Evaluation Average</th>
<td>'.$avg3.' </td>
<td>'.$avg4.'</td>

</tr>

</table>

<br></br>
<br></br>

<center>
<table border="1" cell-padding="2">

<tr>
<th style="width:250px; font-weight:bold">Your Evaluation</th>
<th style="width:250px; font-weight:bold">Overall Teacher Evaluation</th>
</tr>

<tr>
<td>'.$avg1.' </td>
<td>'.$avg3.'</td>
</tr>

<tr>
<th style="width:250px; font-weight:bold">Your Course Evaluation</th>
<th style="width:250px; font-weight:bold">Overall Course Evaluation</th>
</tr>

<tr>
<td>'.$avg2.'</td>
<td>'.$avg4.'</td>
</tr>
</table>

</center>

';




// set some text to print
$txt = <<<EOD
<center>
<h3>Feedback Details </h3>
</center>
{$string}
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $txt, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
ob_clean();
$pdf->Output('Average1.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
