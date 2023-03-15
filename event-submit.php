<?php include'connection.php' ?>
<?php 
if (!empty($_POST)) {
  $event_name = $_POST['event_name'];
  $date = $_POST['date'];

  $q = mysqli_query($conn,"INSERT INTO events (name,date) VALUES('$event_name','$date')");
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