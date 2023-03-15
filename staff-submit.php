<?php include'connection.php' ?>
<?php 
if (!empty($_POST)) {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $designation = $_POST['designation'];
  $education = $_POST['education'];
  $experience = $_POST['experience'];
  $imgName = "";
  if ( isset($_FILES['profile_img']) && $_FILES['profile_img']['name'] != "" ) {

    $imgName = $_FILES['profile_img']['name'];
    $target_dir = "uploads/staff/";
    move_uploaded_file($_FILES['profile_img']['tmp_name'],$target_dir.$imgName);

  } 
  
  $q = mysqli_query($conn,"INSERT INTO staff (name,date,designation,education,img,experience) VALUES('$name','$date','$designation','$education','$imgName','$experience')");
  if($q){
    header("Location: admin.php");
  }else{
    $msg = "Not submitted. Something went wrong! Please re-write.";
    $sts = "danger";
  }
}
?>
  <?php if (!empty($msg)): ?>
            <div class="alert alert-<?=$sts?> text-center font-weight-bold">
              <?=$msg?>
            </div>
          <?php endif ?>