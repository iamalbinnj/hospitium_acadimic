<?php
session_start();
include 'db_connect.php';
include 'fheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
 if(isset($_GET['b_id']))
{
    $b_id=$_GET['b_id'];
    
}
 $w="SELECT * FROM blood WHERE b_id=$b_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);

if(isset($_POST['edit']))
{
  $group=$_POST['group'];
  $count=$_POST['count'];
  $qu="UPDATE blood SET b_group='$group',b_count='$count' where bl_id=$l_id";
  //var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
  //echo "<script>window.location.replace('viewsubjecten.php');</script>";
   
     echo "<script>
    window.location.replace('view_blood.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
    }
}
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center"><br><br><br>
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0" style="text-align: center;    margin-top: 2%;">Available Blood</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; " enctype="multipart/form-data">
                <div class="form-top-left">
<select class="form-control" name="group">
                    <option><?php echo $result['b_group'];?></option>
                    <option value="A+">A+</option>
                    <option value="O+">O+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="O-">O-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>

                  </select>
                    <input type="number" name="count" id="w3lName" placeholder="Count"
                    required="" value="<?php echo $result['b_count'];?>">

                </div>
                
               
                  <div class="form-submit text-center">
                    <button type="submit" name="edit" class="btn btn-style btn-primary" >Save</button>
                  </div><br>


                  
               <!--  <div class="form-submit text-center">
                    <button type="button" name="add_doctor" class="btn btn-style btn-primary" ><a href="add_doctor.php">Add Doctor</a></button>
                  </div> --><br>
                  <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:#6610f2';>
                <font color='#fff'>
                ".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
              </form>
            </div></center>
      
          </div>
        </div>
      </div>
      </div>
  </section>
<?php
include 'footer1.php';
?>





