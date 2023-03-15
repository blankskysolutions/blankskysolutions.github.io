<?php
include'connection.php';
session_start();
if ( !isset($_SESSION['user']) ) {
    header("Location:login.php");
}
?>
<?php include'admin-header.php'?>

<form method="POST" action="staff-submit.php" enctype="multipart/form-data" class="m-auto container-fluid text-center bg">
  <h1>New Staff entry</h1>
    <div class="form-group w-50 text-center m-auto pt-5">
      <input class="form-control" type="text" placeholder="Enter Staff name" name="name" required>
      <input class="form-control" type="text" placeholder="Enter Designation" name="designation" required>
      <input class="form-control" type="text" placeholder="Enter Qualifications" name="education" required>
      <input class="form-control" type="text" placeholder="Enter Experience" name="experience" required>
      <input class="form-control" type="file" name="profile_img" required>
      <input class="form-control" type="date" name="date" name="date" required>
      <button type="submit" class="btn-group  btn-primary m-3 p-2">Submit</button>
    <a href="admin.php" class="btn-secondary p-1">Back</a>

    </div>
</form>
<?php include'footer.php' ?>
