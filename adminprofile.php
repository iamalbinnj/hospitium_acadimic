<?php
session_start();
include 'db_connect.php';
include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
  $l_id=$_SESSION['l_id'];
  //var_dump($l_id);
}

  ?>
<section class="w3l-ab-features py-5">
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main align-items-center" id="features">
        <div class="col-lg-6 feature-gird pb-lg-5">
          
          <h3 class="hny-title mb-4">Admin Profile</h3>
          <div class="separatorhny"></div>
          <p class="pr-lg-5">Name : Hospitium</p>
          <p class="pr-lg-5">Email : hospitium.info@gmail.com</p>
          <p class="pr-lg-5">Password : *********</p>
          <p class="pr-lg-5">Phone : +91 8111970070</p>
         
          <p class="pr-lg-5">Address : Hospitium, 343 Honey Avenue street, NY - 62617.</p>
          


       <!--    <div class="buttons mt-5">
            <a href="fedit.php" class="btn btn-style btn-primary">Edit</a>&nbsp;&nbsp;
            <a href="fdelete.php" class="btn btn-style btn-primary">Delete</a>&nbsp;&nbsp;
            <a href="fedit.php" class="btn btn-style btn-primary">Change password</a>

          </div> -->
        </div>
        <div class="col-lg-6 feature-gird pr-lg-5 mt-md-0 mt-4 pb-lg-5">
          <img src="assets/images/5.jpg" alt="" class="img-fluid" />
        </div>
       

      </div>
    </div>
  </section>
  <?php
include 'footer1.php';
?>