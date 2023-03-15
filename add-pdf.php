<?php include 'connection.php'?>
<?php 

if (!empty($_POST)) {
  $name = $_POST['name'];
  $pdf = "";
  if ( isset($_FILES['pdf']) && $_FILES['pdf']['name'] != "" ) {

    $pdf = $_FILES['pdf']['name'];
    $target_dir = "uploads/pdf/";
    move_uploaded_file($_FILES['pdf']['tmp_name'],$target_dir.$pdf);

  } 
  
  $q = mysqli_query($conn,"INSERT INTO notes (title,name) VALUES('$name','$pdf')");
  if($q){
    $msg = "Added successfully!";
    $sts = "success";
    header("Refresh: 2; url=notes.php");
  }else{
    $msg = "Not submitted. Something went wrong! Please re-write.";
    $sts = "danger";
  }
}
    include'lib.php';
?>
<?php if (!empty($msg)): ?>
            <div class="alert alert-<?=$sts?> text-center font-weight-bold">
              <?=$msg?>
            </div>
          <?php endif ?>

<form method="POST" class="m-auto container text-center" enctype="multipart/form-data">
  <h1>Upload your PDF here!</h1>
    <div class="form-group text-center m-auto pt-5">
      <input type="text" class="form-control" name="name" placeholder="Enter PDF Titile">
      <input type="file" class="form-control" name="pdf" accept=".pdf" title="Upload pdf">
  <button type="submit" class="btn-group  btn-primary m-3 p-2">POST</button>
  <a href="notes.php" class="btn-secondary p-1">Back</a>

    </div>
</form>
<?php include'footer.php' ?>
