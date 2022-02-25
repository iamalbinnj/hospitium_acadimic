<?php
session_start();
include 'db_connect.php';
include 'fheader.php';
 if(isset($_SESSION['l_id']))
{
  $l_id=$_SESSION['l_id'];
  //var_dump($l_id);
}
$s="SELECT * FROM  facilities WHERE afl_id=$l_id";
//var_dump($s);
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
          
          <h3 class="hny-title mb-4">Facilities </h3>
          <div class="separatorhny"></div>
          <p class="pr-lg-5">Ventilator : <?php echo $result['af_ventilator'];?></p>
          <p class="pr-lg-5">Icu : <?php echo $result['af_icu'];?></p>
          <p class="pr-lg-5">Ambulunance : <?php echo $result['af_ambulance'];?></p>
          <p class="pr-lg-5">Oxygen Cylinders: <?php echo $result['af_oxygen'];?></p>
           <p class="pr-lg-5">MRI Scan: <?php echo $result['af_mri'];?></p>
           <p class="pr-lg-5">Dialysis: <?php echo $result['af_dia'];?></p>

       


          <div class="buttons mt-5">
            <a href="editfacilities.php?l_id=<?php echo $l_id;?>" class="btn btn-style btn-primary">Edit</a>
            <!-- <a href="fdelete.php?fl_id=<?php echo $l_id;?>" class="btn btn-style btn-primary">Delete</a> -->


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