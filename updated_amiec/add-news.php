<?php
include'connection.php';
session_start();
if ( !isset($_SESSION['user']) ) {
    header("Location:login.php");
}
?>
<?php include'admin-header.php'?>

<form method="POST" action="news-submit.php" class="m-auto container text-center">
  <h1>News Letters</h1>
    <div class="form-group text-center m-auto pt-5">
      <textarea name="news" class="form-control" cols="20" rows="5" placeholder="Enter the news letter here!"></textarea>
      <input type="date" name="date" class="form-control">
  <button type="submit" class="btn-group btn-primary m-3 p-2">POST</button>
    <a href="admin.php" class="btn-secondary p-1">Back</a>


    </div>
</form>
<?php include'footer.php' ?>
