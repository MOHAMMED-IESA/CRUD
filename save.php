<?php 

 echo $name=$_POST['sname'];
 echo $address=$_POST['saddress'];
 echo $sclass =$_POST['sclass'];
 echo  $phone=$_POST['sphone'];

$con = mysqli_connect("localhost","root","","mysql") or die("  Error ");
$sql =" insert into student(sname,saddress,sclass,sphone)  values('{$name}','{$address}','{$sclass}','{$phone}'); ";
$result= mysqli_query($con, $sql) or die("error");
header('location: http://localhost/crud_php/crud_html/crud_html/index.php');
mysqli_close($con);
?>