<?php
session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
  $l_id=$_SESSION['l_id'];
  //var_dump($l_id);
}
$s="SELECT * FROM  user WHERE ul_id=$l_id";
    if(!$stmt=mysqli_query($con,$s))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
  ?>
<section class="w3l-ab-features py-5">
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main align-items-center" id="features">
        <div class="col-lg-6 feature-gird pb-lg-5">
          
          <h3 class="hny-title mb-4">User Profile</h3>
          <div class="separatorhny"></div>
          <p class="pr-lg-5">Name : <?php echo $result['u_name'];?></p>
          <p class="pr-lg-5">Email : <?php echo $result['u_email'];?></p>
          <p class="pr-lg-5">Password : <?php echo $result['u_password'];?></p>
          <p class="pr-lg-5">Phone : <?php echo $result['u_phone'];?></p>
          <p class="pr-lg-5">DOB : <?php echo $result['u_dob'];?></p>
          <p class="pr-lg-5">Gender : <?php echo $result['u_gender'];?></p>
          <p class="pr-lg-5">Address : <?php echo $result['u_address'];?></p>

          <div class="buttons mt-5">
            <a href="uedit.php?ul_id=<?php echo $l_id;?>" class="btn btn-style btn-primary">Edit</a>
            <a href="udelete.php?ul_id=<?php echo $l_id;?>" class="btn btn-style btn-primary">Delete</a>
            <a href="uchangepassword.php" class="btn btn-style btn-primary">Change password</a>
            
          </div>
        </div>
        <div class="col-lg-6 feature-gird pr-lg-5 mt-md-0 mt-4 pb-lg-5">
          <img src="assets/images/5.jpg" alt="" class="img-fluid" />
        </div>
       

      </div>
    </div>
  </section>
  <?php
include 'footer.php';
?>