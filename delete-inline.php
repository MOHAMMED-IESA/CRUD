<?php 

$stud_sid =$_GET['id']; 
       
       $con = mysqli_connect("localhost","root","","mysql") or die("  Error ");
       $sql =" delete from student where sid = '{$stud_sid }' ; ";
       $result= mysqli_query($con, $sql) or die("error");
header('location: http://localhost/crud_php/crud_html/crud_html/index.php');
       
       mysqli_close($con);


       ?>