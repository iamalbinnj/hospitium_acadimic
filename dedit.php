<?php
session_start();
include 'db_connect.php';
include 'fheader.php';


if(isset($_GET['d_id']))
  {
    $d_id=$_GET['d_id'];
    }

    $w="SELECT * FROM doctor WHERE d_id=$d_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $speciality=$_POST['speciality'];
  $edu_quali=$_POST['edu_quali'];
  $phone=$_POST['phone'];
  $doc_age=$_POST['doc_age'];
  $gender=$_POST['gender'];
  $doc_description=$_POST['doc_description'];
  
  $image=$_FILES['image']['name'];

  if($image=="")
    {
        $image=$_POST['image1'];
    }
  $qu="UPDATE `doctor` SET `d_name`='$name',`d_spec`='$speciality',`d_edu`='$edu_quali',`d_phone`='$phone',`d_age`='$doc_age',`d_gender`='$gender',`d_desc`='$doc_description',`image`='$image' WHERE d_id=$d_id";
  //var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
  //echo "<script>window.location.replace('viewsubjecten.php');</script>";
    $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
        echo "file upload";
        
    }
    //$_SESSION['msg']="Successfully Updated";
    else
    {
        echo "error to upload file";
    }
     echo "<script>
    window.location.replace('view_doctor.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
    }
}
?>
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center"><br><br><br>
        <!-- <h6 class="sub-titlehny">Contact</h6> -->
        <h3 class="hny-title mb-0" style="text-align: center;    margin-top: 2%;">Doctor Registration</h3>
        <!-- <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p> -->
    </div>
      <div class="form-41-mian section-gap mt-5">

        <div class="container">
          <div class="d-grid align-form-map">
            <center><div class="form-inner-cont">
              <form action="" method="post" class="" style="width: 600px; " enctype="multipart/form-data">
                <div class="form-top-left">

                  <input type="text" name="name" id="w3lName" placeholder=" Full Name" value="<?php echo $result['d_name'];?>" required="">
                  <input type="text" name="speciality" id="w3lSender" value="<?php echo $result['d_spec'];?>" placeholder="Speciality"
                    required="">
                  <input type="text" name="edu_quali" id="w3lpassword" value="<?php echo $result['d_edu'];?>" placeholder="Educational Qualification" >
                  

                
                  <input type="text" name="phone" id="w3lName" value="<?php echo $result['d_phone'];?>" placeholder="Phone Number"
                    required="">
                    <input type="Number" name="doc_age" value="<?php echo $result['d_age'];?>" placeholder="Age">
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
                    	<option value="<?php echo $result['d_name'];?>"><?php echo $result['d_gender'];?></option>
                    	<option value="Female">Female</option>
                    	<option value="Male">Male</option>
                      <option value="Other">Other</option>


                    	
                    </select>

                </div>
                <div class="form-top-righ">
                  <textarea name="doc_description" id="w31Address" placeholder="Description (optional)"
                    required=""><?php echo $result['d_desc'];?></textarea>
                </div>
                <div class="form-top-righ">
                 <!--  <input class="form-control" type="file" name="image" placeholder="Photo" required=""> -->
                 <img width="20%" height="40%" src="images/<?php echo $result['image'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['image'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['image'];?>" >
                </div>
                  <!-- <input type="file" name="image" placeholder="Upload Image" required=""> -->

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





