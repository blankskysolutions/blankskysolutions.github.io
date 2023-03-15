<?php include 'connection.php'?>
<?php
session_start();
if ( !isset($_SESSION['student']) ) {
    header("Location:std-login.php");
}
?>
<?php 
if (!empty($_POST)) {
  $name = $_POST['name'];
  $father = $_POST['father'];
  $class = $_POST['class'];
  $section = $_POST['section'];
  $roll = $_POST['roll'];
  $reason = $_POST['reason'];
  $leave_from = $_POST['leave_from'];
  $leave_to = $_POST['leave_to'];
  $days = $_POST['days'];

  $q = mysqli_query($conn,"INSERT INTO leaves (name,father,class,section,roll,reason,leave_from,leave_to,days) VALUES('$name','$father','$class','$section','$roll','$reason','$leave_from','$leave_to','$days')");
  if($q){  
      $msg = "Submitted successfully!";
    $sts = "success";
      session_destroy();
      header("Refresh:2 ; url= index.php");
  }else{
    $msg = "Not submitted. Something went wrong! Please re-write.";
    $sts = "danger";
  }
}
?>
<?php include 'admin-header.php'?>
  <?php 
  if (!empty($msg)): ?>
    <div class="alert alert-<?=$sts?> text-center font-weight-bold">
        <?=$msg?>
    </div>
<?php endif ?>
<form method="POST" class="m-auto container text-center">
  <h1>Leave Form</h1>
    <div class="form-group text-center m-auto pt-5">
        <p><b>All fields contain * are required to proceed.</b></p>
        <input type="text" class="form-control" name="name" placeholder="Enter Name*" required>
        <input type="text" class="form-control" name="father" placeholder="Enter Father Name*" required>
        <input type="text" class="form-control" name="class" placeholder="Enter Class*" required>
        <h4><label class="form-text">Choose Section:</label></h4>
        <select class="form-control" name="section" required>
            <option selected disabled>---Select---</option>
            <option>Boys</option>
            <option>Girls</option>
        </select>
        <input type="number" class="form-control" name="roll" placeholder="Enter Roll Number*" required>
        <h4><label class="form-text">Choose a reason:</label></h4>
        <select class="form-control" name="reason" required>
            <option selected disabled>---Select---</option>
            <option>Marriage</option>
            <option>Urgent Work</option>
            <option>Death</option>
        </select>
        <h4><label>Enter start Date (From)</label></h4>
        <input type="date" class="form-control" name="leave_from" class="form-control" required>
        <h4><label>Enter end Date (To)</label></h4>
        <input type="date" class="form-control" name="leave_to" class="form-control" required>
        <input class="form-control" type="number" placeholder="for days?" required name="days">
        <button type="submit" class="btn-group btn-primary m-3 p-2">POST</button>
    </div>  

    </div>
</form>
<?php include'footer.php'?>