<?php 
session_start();
include('db_connect.php');
    include ('header.php');

if(isset($_POST['login']))
{
    
    $l_uname=$_POST['l_uname'];
    $l_password=$_POST['l_password'];
    $q="SELECT * FROM login where l_uname='$l_uname' and l_password='$l_password'";
    //var_dump($q);
    $eqr=mysqli_query($con,$q);
    $r=$eqr->fetch_assoc();
    if($r)
    {
        if($r['l_type']=="admin" and $r['l_approve']=="approve")
        {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;
        //header("Location:adminprofile.php");
        //echo '<script language="javascript">alert("Successfuly Login")</script>';
       echo "<script>window.location.replace('adminprofile.php');</script>";
       }
       else if($r['l_type']=="faculty" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;
        //header("Location:guideprofile.php");
        echo "<script>window.location.replace('facultyprofile.php');</script>";
       }
       else if($r['l_type']=="user" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;
        //header("Location:customerprofile.php");
        echo "<script>window.location.replace('userprofile.php');</script>";
       }
       
        
        
       else
       {
         $_SESSION['msg']="Username and Password mismatch";
       }
    }
    else
    {
         $_SESSION['msg']="Username and Password mismatch";
     
    }
}
    
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center">
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0">Login</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; " enctype="multipart/form-data">
                <div class="form-top-left">

                  
                  <input type="email" name="l_uname" id="w3lSender" placeholder="Email"
                    required="">
                  <input type="password" name="l_password" id="w3lpassword" placeholder="Password" required="">
                  

                
                  
                <div class="form-submit text-center">
                    <button type="submit" name="login" class="btn btn-style btn-primary">Login</button>
                  </div><br>
                  <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='danger' ;><font color='red'>".$_SESSION['msg']."</font></div>";
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
include 'footer1.php';
?>