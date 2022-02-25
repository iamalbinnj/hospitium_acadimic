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
  $ventilator=$_POST['ventilator'];
  $icu=$_POST['icu'];
  $ambulance=$_POST['ambulance'];
  $oxygen=$_POST['oxygen'];
  $mri=$_POST['mri'];
  $dia=$_POST['dia'];


  
  
 
  $b="INSERT INTO `facilities`(`afl_id`, `af_ventilator`, `af_icu`, `af_ambulance`, `af_oxygen`, `af_mri`, `af_dia`) VALUES('$l_id','$ventilator','$icu','$ambulance','$oxygen','$mri','$dia')";
  // var_dump($b);

  if($con->query($b))

  {  
    $_SESSION['msg']="Successfully Updated";
    }
  
}
if(isset($_POST['edit']))
{
  $ventilator=$_POST['ventilator'];
  $icu=$_POST['icu'];
  $ambulance=$_POST['ambulance'];
  $oxygen=$_POST['oxygen'];
  $mri=$_POST['mri'];
  $dia=$_POST['dia'];


 

  $qu="UPDATE facilities SET af_ventilator='$ventilator',af_icu='$icu',af_ambulance='$ambulance',af_oxygen='$oxygen',af_mri='$mri',af_dia='$dia' where afl_id=$l_id";
  //var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
  //echo "<script>window.location.replace('viewsubjecten.php');</script>";
   
     echo "<script>
    window.location.replace('view_facilities.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
    }
}
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center"><br><br><br>
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0" style="text-align: center;    margin-top: 2%;">Available Facilities</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; " enctype="multipart/form-data">
                <div class="form-top-left">

                  <input type="number" name="ventilator" id="w3lName" placeholder=" Ventilators" required="">
                  <input type="number" name="icu" id="w3lSender" placeholder="I.C.U Rooms"
                    required="">
                  <input type="number" name="ambulance" id="w3lpassword" placeholder="Ambulance" >
                  

                
                  <input type="number" name="oxygen" id="w3lName" placeholder="Oxygen Cylinders"
                    required="">
                  <input type="text" name="mri" id="w3lName" placeholder="MRI Scan"
                    required="">
                    <input type="text" name="dia" id="w3lName" placeholder=" Dialysis"
                    required="">
                    

                </div>
                
                <div class="form-submit text-center">
                    <button type="submit" name="submit" class="btn btn-style btn-primary" >Submit</button>
                  </div>
               <br>


                  
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





