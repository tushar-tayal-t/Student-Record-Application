<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
     $conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
     $url_id=$_GET['id'];
     $query="select * from student where sid=$url_id";
     $result=mysqli_query($conn,$query) or die("Query unsuccessful");
     if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="" disabled>Select Class</option>
              <?php 
              $query2="select * from studentclass";
              $result2=mysqli_query($conn,$query2) or die("Query unsuccessful");
              if(mysqli_num_rows($result2)){
              while($row2=mysqli_fetch_assoc($result2)){
              ?>
              <option value="<?php echo $row2['cid']; ?>" <?php if($row['sclass']===$row2['cid']){echo "selected";}?>><?php echo $row2['cname']; ?></option>
              <?php }} ?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php } mysqli_close($conn);?>
</div>
</div>
</body>
</html>
