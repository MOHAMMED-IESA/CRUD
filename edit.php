<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php 
        $id = $_GET['id'];
        $con = mysqli_connect("localhost","root","","mysql") or die("  Error ");
        $sql =" select * from student where sid= {$id} ; ";
        $result= mysqli_query($con, $sql) or die("error");

        // if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo  $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo  $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo  $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          
              <?php 
        $sql1 =" select * from  studentclass ; ";
        $result1= mysqli_query($con, $sql1) or die("error");  

if (mysqli_num_rows($result1) >0){
    echo ' <select name="sclass">';

        while($row1 = mysqli_fetch_assoc($result1)){        
            
            if($row['sclass'] == $row1['cid'])
            {
                $select = "selected"   ;
            }
            else{
                $select = "";
            }
            ?>
             <option  <?php  echo  $select; ?> value="<?php  echo $row1['cid'] ; ?>" ><?php echo $row1["cname"] ; ?></option> 

             <?php
            } 
            echo " </select>";
 mysqli_close($con);
}
          ?>   
          
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo  $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>

      <?php }?>
    </form>
</div>
</div>
</body>
</html>
