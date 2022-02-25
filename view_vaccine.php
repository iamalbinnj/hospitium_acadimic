<?php
session_start();
include 'db_connect.php';
include 'fheader.php';
 if(isset($_SESSION['l_id']))
{
  $l_id=$_SESSION['l_id'];
  //var_dump($l_id);
}
$s="SELECT * FROM vaccine WHERE vl_id=$l_id";
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
        <h3 class="hny-title">Vaccine</h3>
        <div class="separatorhny"></div>
      </div>
      <div class="row features mt-4">
        <?php

$s="SELECT * FROM vaccine where vl_id=$l_id";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $v_id=$row['v_id'];
  $vl_id=$row['vl_id'];

  // $subject=$row['subject'];
  $name=$row['v_name'];
  $available=$row['v_available'];
 


                                ?>
      
        <div class="col-lg-4 col-md-6 feature-grid">
          <a href="#url">
          </a>
          <div class="feature-body service3"><a href="#url">

            </a>
            <div class="feature-info mt-4"><a href="#url">
              <!-- <img src="images/<?php echo $image; ?>"> -->
                <h3 class="feature-titel mb-2"><?php echo $name;?></h3>
                <p class="feature-text">Availability : <?php echo $available ;?></p>
               
               
              </a>
            </div>
             <div class="buttons mt-5">
            
              <a href="editvaccine.php?v_id=<?php echo $v_id;?>" class="btn btn-style btn-primary">Edit</a>


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
