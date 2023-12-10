<?php include 'header.php';
  

   if (isset($_POST['deletebtn'])){

       $stud_sid =$_POST['stid']; 
       
       $con = mysqli_connect("localhost","root","","mysql") or die("  Error ");
       $sql =" delete from student where sid = '{$stud_sid }' ; ";
       $result= mysqli_query($con, $sql) or die("error");
header('location: http://localhost/crud_php/crud_html/crud_html/index.php');
       
       mysqli_close($con);
   }
      

?>


<div id="main-content">
    <h2>Delete Record</h2>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="stid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>


</div>
</div>
</body>
</html>
