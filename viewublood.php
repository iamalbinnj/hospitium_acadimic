<?php
session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_GET['bl_id']))
{
  $bl_id=$_GET['bl_id'];
  //var_dump($l_id);
}
$s="SELECT * FROM blood WHERE bl_id=$bl_id";
//var_dump($s);
    if(!$stmt=mysqli_query($con,$s))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
  ?>
<div class="w3l-services2 py-5">
    <div class="container py-xl-5 py-3">
      <div class="title-content">
        <h6 class="sub-titlehny"></h6>
        <h3 class="hny-title">Blood Group</h3>
        <div class="separatorhny"></div>
      </div>
      <div class="row features mt-4">
        <?php

$s="SELECT * FROM blood where bl_id=$bl_id";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $b_id=$row['b_id'];
  $bl_id=$row['bl_id'];

  // $subject=$row['subject'];
  $group=$row['b_group'];
  $count=$row['b_count'];
 


                                ?>
      
        <div class="col-lg-4 col-md-6 feature-grid">
          <a href="#url">
          </a>
          <div class="feature-body service3"><a href="#url">

            </a>
            <div class="feature-info mt-4"><a href="#url">
              <!-- <img src="images/<?php echo $image; ?>"> -->
                <h3 class="feature-titel mb-2">Blood Group<?php echo $group;?></h3>
                <p class="feature-text">Pouch : <?php echo $count ;?></p>
               
               
              </a>
            </div>
             <div class="buttons mt-5">
            
              <!-- <a href="editblood.php?b_id=<?php echo $b_id;?>" class="btn btn-style btn-primary">Edit</a> -->


          </div>
          </div>

        </div>
        <?php
                             }
                             ?>
      
      
       
      </div>
    </div>
  </div>
  <?php
include 'footer.php';
?>