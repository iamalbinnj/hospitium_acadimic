<?php
session_start();
include 'db_connect.php';
include 'fheader.php';
 if(isset($_SESSION['l_id']))
{
  $l_id=$_SESSION['l_id'];
  //var_dump($l_id);
}

  ?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container">
            <h2 class="title">Doctor Profile</h2>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                <li><a href="index.php">Home</a></li>
                <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us </li> -->
            </ul>
        </div>
    </div>
  </section>

    <!--/w3l-services2-->
  <div class="w3l-services2 py-5">
    <div class="container py-xl-5 py-3">
      <div class="title-content">
        <h6 class="sub-titlehny"></h6>
        <h3 class="hny-title">Doctors</h3>
        <div class="separatorhny"></div>
      </div>
      <div class="row features mt-4">
        <?php

$s="SELECT * FROM doctor where dfl_id=$l_id";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $d_id=$row['d_id'];
  $dfl_id=$row['dfl_id'];

  // $subject=$row['subject'];
  $name=$row['d_name'];
  $phone=$row['d_phone'];
  $age=$row['d_age'];
   

   $desc=$row['d_desc'];
  $image=$row['image'];
  $edu=$row['d_edu'];

  $gender=$row['d_gender'];

  $spec=$row['d_spec'];


                                ?>
      
        <div class="col-lg-4 col-md-6 feature-grid">
          <a href="#url">
          </a>
          <div class="feature-body service3"><a href="#url">

            </a>
            <div class="feature-info mt-4"><a href="#url">
              <center><img src="images/<?php echo $image; ?>">
                <h3 class="feature-titel mb-2"><?php echo $name;?></h3></center>
                <p class="feature-text">Speciality : <?php echo $spec ;?></p>
                <p class="feature-text">Educational Qualification : <?php echo $edu;?></p>
                <p class="feature-text">Phone NO : <?php echo $phone;?></p>
                <p class="feature-text">Age : <?php echo $age;?></p>
                <p class="feature-text">Gender : <?php echo $gender;?></p>
                <p class="feature-text">Description : <?php echo $desc;?></p>

               
              </a>
            </div>
             <div class="buttons mt-5">
            
              <a href="dedit.php?d_id=<?php echo $d_id;?>" class="btn btn-style btn-primary">Edit</a>

            <a href="ddelete.php?d_id=<?php echo $d_id;?>" class="btn btn-style btn-primary">Delete</a>

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
include 'footer1.php';
?>