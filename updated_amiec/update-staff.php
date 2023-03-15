<?php
include'connection.php';
session_start();
if ( !isset($_SESSION['user']) ) {
    header("Location:login.php");
}
  $id = $_GET['id'];
  $query = "SELECT * FROM staff WHERE id = '$id'";
  $result = mysqli_query($conn , $query);
  $row = mysqli_fetch_assoc($result);
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
  
  $q = mysqli_query($conn,"UPDATE staff SET name='$name',date='$date',designation='$designation',education='$education',img='$imgName',experience='$experience' WHERE id = '$id' ");
  if($q){
    $msg = "Updated successfully!";
    $sts = "success";
    header("Refresh:3; url=  admin.php");
  }else{
    $msg = "Not submitted. Something went wrong! Please re-write.";
    $sts = "danger";
  }
}
include'admin-header.php';
?>
<?php 
  if (!empty($msg)): ?>
    <div class="alert alert-<?=$sts?> text-center font-weight-bold">
        <?=$msg?>
    </div>
<?php endif ?>



<form method="POST"  enctype="multipart/form-data" class="m-auto container-fluid text-center bg">
  <h1>Staff Update</h1>
    <div class="form-group w-50 text-center m-auto pt-5">
      <input class="form-control" type="text" placeholder="Enter Staff name" value="<?php echo $row['name'] ?>" name="name" required>
      <input class="form-control" type="text" placeholder="Enter Designation" name="designation" value=" <?php echo $row['designation'] ?>" required>
      <input class="form-control" type="text" placeholder="Enter Qualifications" name="education" value=" <?php echo $row['education'] ?>" required>
      <input class="form-control" type="text" placeholder="Enter Experience" name="experience" value=" <?php echo $row['experience'] ?>" placeholder="Enter Experience" required>
      <input class="form-control" type="file" name="profile_img" required>
      <input class="form-control" type="date" name="date" name="date" value=" <?php echo $row['date'] ?>" required>
      <input type="submit" class="btn-group  btn-primary m-3 p-2">
      <a href="admin.php" class="btn-secondary p-1">Back</a>

    </div>
</form> 
<?php include'footer.php' ?>
