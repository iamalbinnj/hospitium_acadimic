<?php
session_start();
include 'db_connect.php';
include 'uheader.php';


if(isset($_GET['ul_id']))
  {
    $ul_id=$_GET['ul_id'];
    }

    $w="SELECT * FROM user WHERE ul_id=$ul_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  // $password=$_POST['password'];
 
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   

  $phone=$_POST['phone'];
  


  
  $address=$_POST['address'];
 

  $qu="UPDATE user SET u_name='$name',u_dob='$dob',u_gender='$gender',u_phone='$phone',u_email='$email',u_address='$address' where ul_id=$ul_id";
  //var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
  //echo "<script>window.location.replace('viewsubjecten.php');</script>";
   
     echo "<script>
    window.location.replace('userprofile.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
    }
}
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center">
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0">Edit Profile</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; ">
                <div class="form-top-left">

                  <input type="text" name="name" id="w3lName" placeholder=" Full Name" value="<?php echo $result['u_name'];?>" required="">
                  <input type="email" name="email" id="w3lSender" placeholder="Email" value="<?php echo $result['u_email'];?>"
                    required="">
                  <!-- <input type="password" name="password" id="w3lpassword" placeholder="Password" required=""> -->
                  

                
                  <input type="text" name="phone" id="w3lName" placeholder="Phone Number" value="<?php echo $result['u_phone'];?>"
                    required="">
                    <input type="date" name="dob" placeholder="Date of birth" value="<?php echo $result['u_dob'];?>">
                    <select name="gender" style="
    outline: none;
    width: 100%;
    font-size: 16px;
    padding: 0px 15px;
    margin-bottom: 25px;
    color: var(--para-color);
    height: 60px;
    text-align: left;
    -webkit-appearance: none;
    display: grid;
    grid-template-columns: .1fr 1fr;
    align-items: center;
    padding-left: 15px;
    background-color: var(--bg-light);
    border: 1px solid var(--bg-border);
    border-radius: 8px;
">
                    	<option value="<?php echo $result['u_gender'];?>"><?php echo $result['u_gender'];?></option>
                    	<option value="Female">Female</option>
                    	<option value="Male">Male</option>

                    	
                    </select>

                </div>
                <div class="form-top-righ">
                  <textarea name="address" id="w31Address" placeholder="Address"
                    required=""><?php echo $result['u_address'];?></textarea>
                </div>
                <div class="form-submit text-center">
                    <button type="submit" name="submit" class="btn btn-style btn-primary">Update</button>
                  </div><br>
                  <?php
            // if(isset($_SESSION['msg']))
            // {
            //     echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
            //     unset($_SESSION['msg']);
            // }
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