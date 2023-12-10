<?php 
echo $stu_sid =$_POST['sid'];
 echo $stu_name=$_POST['sname'];
 echo $stu_address=$_POST['saddress'];
 echo $stu_sclass =$_POST['sclass'];
 echo  $stu_phone=$_POST['sphone'];

$con = mysqli_connect("localhost","root","","mysql") or die("  Error ");
$sql =" update student set  sname ='{$stu_name}' ,saddress=' {$stu_address}' , sclass= ' {$stu_sclass} ', sphone = '{$stu_phone}'  where sid= {$stu_sid} ; ";
$result= mysqli_query($con, $sql) or die("error");
header('location: http://localhost/crud_php/crud_html/crud_html/index.php');
mysqli_close($con);
?>