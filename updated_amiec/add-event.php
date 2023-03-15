<?php
include'connection.php';
session_start();
if ( !isset($_SESSION['user']) ) {
    header("Location:login.php");
}
?>
<?php include'admin-header.php'?>

<form method="POST" action="event-submit.php" class="m-auto container text-center">
  <h1>Events</h1>
    <div class="form-group text-center m-auto pt-5">
      <input type="text" class="form-control" name="event_name" placeholder="Enter Event Titile">
      <input type="date" name="date" class="form-control">
  <button type="submit" class="btn-group  btn-primary m-3 p-2">POST</button>
  <a href="admin.php" class="btn-secondary p-1">Back</a>

    </div>
</form>
<?php include'footer.php' ?>
