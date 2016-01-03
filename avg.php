<?php
require "core.php";
include "head.php";

echo '<br /> <br />';
$con_error="cannot be connected";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="users";
$t1=$_GET['var'];
//echo $t1;
$t2=explode(',',$t1);
$cno=$t2[0];
$fac=$t2[1];
echo '<center>';
echo "Welcome". $fac;
echo '<br />';
echo '<br />';
echo "COURSE NO :".$cno;
$_SESSION['cnumber']=$cno;
$_SESSION['faculty']=$fac;
$name=$_SESSION['name'];
//$fac=$_SESSION['fac_id'];

echo '</center>';
//echo $name;
?>



<?php
echo '<form style ="padding-left:850px"  method ="post" action = "tcpdf/examples/example_001.php?var='.$cno.','.$fac.','.$name.'" >
<input type="submit" name="b1" value="print">
</form>';
?>
<?php $i=0;
$j=0;
 ?>
<center>

<table border="1" cellpadding="5">

<tr>
<th colspan="2">Teacher Evaluation</th>
<th>Teacher Mean</th>
<th>Institute Mean</th>
</tr>



<tr>
<td>1</td>
<td>The lectures are well prepared.</td>
<td><?php 
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$query="select avg(q1) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q1)'];
$t1=$row['avg(q1)'];
$arr1[$i]=$t1;

}
}

 ?></td>
<td><?php 
$query="select avg(q1) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q1)'];
$p1=$row['avg(q1)'];
$arr2[$j]=$p1;

}?></td>
</tr>

<tr>
<td>2</td>
<td>The instructor communicates well and gave clear explanations</td>
<td><?php
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q2) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q2)'];
$t2=$row['avg(q2)'];
$arr1[$i]=$t2;
}
}
?>
</td>
<td><?php 
$j=$j+1;
$query="select avg(q2) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q2)'];
$p2=$row['avg(q2)'];
$arr2[$j]=$p2;
}?></td>
</tr>
<br></br>


<tr>
<td>3</td>
<td>The instructor motivates the student to learn the subject</td>
<td><?php
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q3) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q3)'];
$t3=$row['avg(q3)'];
$arr1[$i]=$t3;
}
}
?>
</td>
<td><?php 
$j=$j+1;
$query="select avg(q3) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q3)'];
$p3=$row['avg(q3)'];
$arr2[$j]=$p3;
}?></td>
</tr>

<tr>
<td>4</td>
<td>The instructor makes good use of examples and illustrations</td>
<td>
<?php
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q4) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q4)'];
$t4=$row['avg(q4)'];
$arr1[$i]=$t4;
}
}
?>

</td>
<td><?php
$j=$j+1; 
$query="select avg(q4) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q4)'];
$p4=$row['avg(q4)'];
$arr2[$j]=$p4;
}?></td>
</tr>


<tr>
<td>5</td>
<td>The instructor effectively uses all the credit hours and completes the syllabus</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q5) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q5)'];
$t5=$row['avg(q5)'];
$arr1[$i]=$t5;
}
} ?></td>
<td><?php
$j=$j+1; 
$query="select avg(q5) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q5)'];
$p5=$row['avg(q5)'];
$arr2[$j]=$p5;
}?></td>
</tr> 

<tr>
<td>6</td>
<td>The instructor acknowledges all questions as far as possible</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q6) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q6)'];
$t6=$row['avg(q6)'];
$arr1[$i]=$t6;
}
}  ?></td>
<td><?php 
$j=$j+1;
$query="select avg(q6) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q6)'];
$p6=$row['avg(q6)'];
$arr2[$j]=$p6;
}?></td>
</tr> 

<tr>
<td>7</td>
<td>Examinations cover all the important aspects of the course</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q7) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q7)'];
$t7=$row['avg(q7)'];
$arr1[$i]=$t7;
}
} ?></td>
<td><?php
$j=$j+1; 
$query="select avg(q7) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q7)'];
$p7=$row['avg(q7)'];
$arr2[$j]=$p7;
}?></td>
</tr> 

<tr>
<td>8</td>
<td>Examinations are grades very carefully and fairly</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q8) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q8)'];
$t8=$row['avg(q8)'];
$arr1[$i]=$t8;
}
} ?></td>
<td><?php 
$j=$j+1;
$query="select avg(q8) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q8)'];
$p8=$row['avg(q8)'];
$arr2[$j]=$p8;
}?></td>
</tr> 

<tr>
<td>9</td>
<td>Exam questions are challenging and not repetitive</td>
<td>
<?php
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q9) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q9)'];
$t9=$row['avg(q9)'];
$arr1[$i]=$t9;
}
}

?>
</td>
<td><?php
$j=$j+1; 
$query="select avg(q9) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q9)'];
$p9=$row['avg(q9)'];
$arr2[$j]=$p9;
}?></td>
</tr>


<tr>
<td>10</td>
<td>Instructor is interactive and available</td>
<td>
<?php
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$i=$i+1;
$query="select avg(q10) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q10)'];
$t10=$row['avg(q10)'];
$arr1[$i]=$t10;
}
}

?>
</td>
<td><?php
$j=$j+1; 
$query="select avg(q10) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q10)'];
$p10=$row['avg(q10)'];
$arr2[$j]=$p10;
}?></td>
</tr>


<?php
$sum1=0;
$sum2=0; 
for($k=0;$k<count($arr1);$k++)
{
$sum1=$sum1+$arr1[$k];
}
$avg1=$sum1/count($arr1);
$avg1=round($avg1,2);

for($k=0;$k<count($arr2);$k++)
{
$sum2=$sum2+$arr2[$k];
}
$avg2=$sum2/count($arr2);
$avg2=round($avg2,2);
?>

<tr>
<td></td>
<th  >Teacher Evaluation Average</th>
<td><?php echo $avg1; ?> </td>
<td><?php echo $avg2; ?> </td>

</tr>

<tr >
<td></td>
<th>COURSE EVALUATION</th>
<td></td>
<td></td>
</tr>

<?php 
$m=0;
$n=0;
?>

<tr>
<td>1</td>
<td>Course contents are well planned and organized</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$query="select avg(q11) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q11)'];
$m1=$row['avg(q11)'];
$arr3[$m]=$m1;
}
} ?></td>
<td><?php 
$query="select avg(q11) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q11)'];
$n1=$row['avg(q11)'];
$arr4[$n]=$n1;
}?></td>
</tr>

<tr>
<td>2</td>
<td>I gained a good understanding of concepts/principles in the field</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q12) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q12)'];
$m2=$row['avg(q12)'];
$arr3[$m]=$m2;
}
} ?></td>
<td><?php 
$n=$n+1;
$query="select avg(q12) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q12)'];
$n2=$row['avg(q12)'];
$arr4[$n]=$n2;
}?></td>
</tr>

<tr>
<td>3</td>
<td> I received an adequate overview of this field to meet my professional goals</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q13) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q13)'];
$m3=$row['avg(q13)'];
$arr3[$m]=$m3;
}
} ?></td>
<td><?php
$n=$n+1;
$query="select avg(q13) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q13)'];
$n3=$row['avg(q13)'];
$arr4[$n]=$n3;
}?></td>
</tr>

<tr>
<td>4</td>
<td>The amount of material covered in this course is reasonable</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q14) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q14)'];
$m4=$row['avg(q14)'];
$arr3[$m]=$m4;
}
} ?></td>
<td><?php 
$n=$n+1;
$query="select avg(q14) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q14)'];
$n4=$row['avg(q14)'];
$arr4[$n]=$n4;
}?></td>
</tr>

<tr>
<td>5</td>
<td>The amount of work required is appropriate for the credit received</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q15) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q15)'];
$m5=$row['avg(q15)'];
$arr3[$m]=$m5;
}
} ?></td>
<td><?php 
$n=$n+1;
$query="select avg(q15) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q15)'];
$n5=$row['avg(q15)'];
$arr4[$n]=$n5;
}?></td>
</tr>

<tr>
<td>6</td>
<td> Assignments are interesting </td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q16) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q16)'];
$m6=$row['avg(q16)'];
$arr3[$m]=$m6;
}
} ?></td>
<td><?php
$n=$n+1; 
$query="select avg(q16) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q16)'];
$n6=$row['avg(q16)'];
$arr4[$n]=$n6;
}?></td>
</tr>

<tr>
<td>7</td>
<td> I developed plans to take additional related courses</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q17) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q17)'];
$m7=$row['avg(q17)'];
$arr3[$m]=$m7;
}
} ?></td>
<td><?php 
$n=$n+1;
$query="select avg(q17) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q17)'];
$n7=$row['avg(q17)'];
$arr4[$n]=$n7;
}?></td>
</tr>

<tr>
<td>8</td>
<td> Assignments make students think</td>
<td><?php if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db) )
{
die($con_error);
}
else
{
$m=$m+1;
$query="select avg(q18) from `$name` where courseno='$cno' group by courseno";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q18)'];
$m8=$row['avg(q18)'];
$arr3[$m]=$m8;
}
} ?></td>
<td><?php 
$n=$n+1;
$query="select avg(q18) from `$name`";
$query_run=mysql_query($query);
if($query_run)
{
$row=mysql_fetch_assoc($query_run);
echo $row['avg(q18)'];
$n8=$row['avg(q18)'];
$arr4[$n]=$n8;
}?></td>
</tr>


<?php
$sum3=0;
$sum4=0; 
for($k=0;$k<count($arr3);$k++)
{
$sum3=$sum3+$arr3[$k];
}
$avg3=$sum3/count($arr3);
$avg3=round($avg3,2);

for($k=0;$k<count($arr4);$k++)
{
$sum4=$sum4+$arr4[$k];
}
$avg4=$sum4/count($arr4);
$avg4=round($avg4,2);
?>

<tr>
<td></td>
<th  >Course Evaluation Average</th>
<td><?php echo $avg3; ?> </td>
<td><?php echo $avg4; ?> </td>

</tr>



</table>

<table border="1" cell-padding="2">

<tr>
<th>Your Evaluation</th>
<th>Overall Teacher Evaluation</th>
</tr>

<tr>
<td><?php echo $avg1; ?> </td>
<td><?php echo $avg3;?></td>
</tr>

<tr>
<th>Your Course Evaluation</th>
<th>Overall Course Evaluation</th>
</tr>

<tr>
<td><?php echo $avg2; ?> </td>
<td><?php echo $avg4;?></td>
</tr>

</table>

</center>