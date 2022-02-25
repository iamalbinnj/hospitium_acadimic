<?php
session_start();
include 'db_connect.php';
include 'fheader.php';


if(isset($_GET['v_id']))
  {
    $v_id=$_GET['v_id'];
    }

    $w="SELECT * FROM vaccine WHERE v_id=$v_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
 $vname=$_POST['vname'];
  $available=$_POST['available'];

  $qu="UPDATE `vaccine` SET `v_name`='$vname',`v_available`='$available' WHERE v_id=$v_id";
  //var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
 
     echo "<script>
    window.location.replace('view_vaccine.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
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

                  <input type="text" name="vname" id="w3lName" value="<?php echo $result['v_name'];?>" placeholder=" Vaccine Name" required="">
                  <input type="number" name="available" id="w3lSender" value="<?php echo $result['v_available'];?>" placeholder="Available Vaccine"
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





