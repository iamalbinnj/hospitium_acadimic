<?php
session_start();
include 'db_connect.php';
include 'header.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
 
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   

  $phone=$_POST['phone'];
  $image=$_FILES['image']['name'];

  $address=$_POST['address'];
  $hospital=$_POST['hospital'];
  $near=$_POST['near'];

  $type='faculty';

  $approve='not approve';

  $b="INSERT INTO `login`(`l_uname`, `l_password`, `l_type`, `l_approve`)VALUES('$email','$password','$type','$approve')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;

    $q="INSERT INTO `faculty`( `fl_id`, `f_name`, `f_email`, `f_password`, `f_phone`, `f_dob`, `f_gender`, `f_address`,`f_hospital`,`f_nearplace`, `image`)VALUES($id,'$name','$email','$password','$phone','$dob','$gender','$address','$hospital','$near','$image')";
   //var_dump($q,$b);
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

    {
      

      $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
        echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
     
    $_SESSION['msg']="Successfully Register";
    }
  }
}
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center">
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0">Faculty Registration</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; " enctype="multipart/form-data">
                <div class="form-top-left">

                  <input type="text" name="name" id="w3lName" placeholder=" Full Name" required="">
                  <input type="email" name="email" id="w3lSender" placeholder="Email"
                    required="">
                  <input type="password" name="password" id="w3lpassword" placeholder="Password" required="">
                  

                
                  <input type="text" name="phone" id="w3lName" placeholder="Phone Number"
                    required="">
                    <input type="date" name="dob" placeholder="Date of birth">
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
                    	<option value="">Gender</option>
                    	<option value="Female">Female</option>
                    	<option value="Male">Male</option>
                      <option value="Other">Other</option>


                    	
                    </select>

                </div>
                <div class="form-top-righ">
                  <textarea name="address" id="w31Address" placeholder="Address"
                    required=""></textarea>
                </div>
                <input type="text" name="hospital" id="w3lName" placeholder=" Hospital Name" required="">
                <div class="form-top-righ">
                  <textarea name="near" id="w31Address" placeholder="Near Place"
                    required=""></textarea>
                </div>
                  <input type="file" name="image" placeholder="Upload certificates" required="">

                <div class="form-submit text-center">
                    <button type="submit" name="submit" class="btn btn-style btn-primary">Submit</button>
                  </div><br>
                  <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='black'>".$_SESSION['msg']."</font></div>";
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