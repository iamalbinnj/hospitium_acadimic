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
    <!--/w3l-services2-->
  <div class="w3l-services2 py-5">
    <div class="container py-xl-5 py-3">
      <div class="title-content">
        <h6 class="sub-titlehny">Some More Features</h6>
        <h3 class="hny-title">What We Provide</h3>
        <div class="separatorhny"></div>
      </div>
      <div class="row features mt-4">
        <?php

$s="SELECT * FROM login INNER JOIN user on login.l_id=user.ul_id ";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $u_id=$row['u_id'];
  $ul_id=$row['ul_id'];

  // $subject=$row['subject'];
  $name=$row['u_name'];
  $phone=$row['u_phone'];
  $dob=$row['u_dob'];
   

   $email=$row['u_email'];
  $password=$row['u_password'];
  $address=$row['u_address'];

  $gender=$row['u_gender'];

  $approve=$row['l_approve'];


                                ?>
      
        <div class="col-lg-4 col-md-6 feature-grid">
          <a href="#url">
          </a>
          <div class="feature-body service3"><a href="#url">

            </a>
            <div class="feature-info mt-4"><a href="#url">
                <h3 class="feature-titel mb-2"><?php echo $name;?></h3>
                <p class="feature-text">Email : <?php echo $email;?></p>
                <p class="feature-text">Password : <?php echo $password;?></p>
                <p class="feature-text">Phone : <?php echo $phone;?></p>
                <p class="feature-text">DOB : <?php echo $dob;?></p>
                <p class="feature-text">Gender : <?php echo $gender;?></p>
                <p class="feature-text">Address : <?php echo $address;?></p>

               
              </a>
            </div>
             <div class="buttons mt-5">
            
            <a href="udelete.php" class="btn btn-style btn-primary">Delete</a>

          </div>
          </div>

        </div>
        <?php
                             }
                             ?>
      
      
       
      </div>
    </div>
  </div>
  <!--//w3l-services2-->
  <?php
include 'footer.php';
?>