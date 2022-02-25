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

$s="SELECT * FROM login INNER JOIN faculty on login.l_id=faculty.fl_id ";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $f_id=$row['f_id'];
  $fl_id=$row['fl_id'];

  // $subject=$row['subject'];
  $name=$row['f_name'];
 $image=$row['image'];
  $phone=$row['f_phone'];
  $dob=$row['f_dob'];
   

   $email=$row['f_email'];
   $hname=$row['f_hospital'];

  $password=$row['f_password'];
  $address=$row['f_address'];

  $gender=$row['f_gender'];
  $near=$row['f_nearplace'];


  $approve=$row['l_approve'];


                                ?>
      
        <div class="col-lg-4 col-md-6 feature-grid">
          <a href="#url">
          </a>
          <div class="feature-body service3"><a href="#url">

            </a>
            <div class="feature-info mt-4"><a href="#url">
                <h3 class="feature-titel mb-2"><?php echo $hname;?></h3>
                <p class="feature-text">Name : <?php echo $name;?></p>

                <p class="feature-text">Email : <?php echo $email;?></p>
                <p class="feature-text">Password : <?php echo $password;?></p>
                <p class="feature-text">Phone : <?php echo $phone;?></p>
                <p class="feature-text">DOB : <?php echo $dob;?></p>
                <p class="feature-text">Gender : <?php echo $gender;?></p>
                <p class="feature-text">Address : <?php echo $address;?></p>
                <p class="feature-text">Near : <?php echo $near;?></p>

                            

          
                <p class="feature-text">Status : <?php echo $approve;?></p>

                <?php
                                    if($approve=='approve')
                                    {
                                    ?>
                                    <a href="disfaculty.php?fl_id=<?php echo $fl_id;?>&f_id=<?php echo $f_id;?>"><button class="btn btn-danger" >Disapprove</button></a>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <a href="appfaculty.php?fl_id=<?php echo $fl_id;?>&f_id=<?php echo $f_id;?>"><button class="btn btn-success" >Approve</button></a>

                                    <?php
                                  }
                                  ?>
              </a>
              <div class="buttons mt-5">
            
            <a href="fdelete.php?fl_id=<?php echo $fl_id;?>" class="btn btn-primary">Delete</a>
          <a href="viewfacility.php?afl_id=<?php echo $fl_id;?>" class="btn btn-primary">Facility</a>
        <a href="viewvaccine.php?vl_id=<?php echo $fl_id;?>" class="btn btn-primary">Vaccine</a></div>
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