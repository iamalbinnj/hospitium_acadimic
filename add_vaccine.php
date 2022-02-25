<?php
session_start();
include 'db_connect.php';
include 'fheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $vname=$_POST['vname'];
  $available=$_POST['available'];
 
  
  
 
  $b="INSERT INTO `vaccine`(`vl_id`, `v_name`, `v_available`) VALUES('$l_id','$vname','$available')";
  // var_dump($b);

  if($con->query($b))

  {  
    $_SESSION['msg']="Successfully Updated";
    }
  
}
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center"><br><br><br>
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0" style="text-align: center;    margin-top: 2%;">Available Vaccine</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; " enctype="multipart/form-data">
                <div class="form-top-left">

                  <input type="text" name="vname" id="w3lName" placeholder=" Vaccine Name" required="">
                  <input type="number" name="available" id="w3lSender" placeholder="Available Vaccine"
                    required="">
                 

                </div>
                
                <div class="form-submit text-center">
                    <button type="submit" name="submit" class="btn btn-style btn-primary" >Submit</button>
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
include 'footer.php';
?>





