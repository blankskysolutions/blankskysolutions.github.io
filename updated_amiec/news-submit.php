<?php include'connection.php' ?>
<?php 
if (!empty($_POST)) {
  $news = $_POST['news'];
  $date = $_POST['date'];

  $q = mysqli_query($conn,"INSERT INTO news (news,date) VALUES('$news','$date')");
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