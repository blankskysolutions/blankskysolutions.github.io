<?php include'lib.php' ?>
<?php include'connection.php' ?>
<?php 
if(!empty($_POST)){
	$std_name = $_POST['std_name'];
	$std_email = $_POST['std_email'];
	$std_address = $_POST['std_address'];
	$std_query = $_POST['std_query'];
	$std_phone = $_POST['std_phone'];
	$q = mysqli_query($conn,"INSERT INTO inquiry (std_name,email,address,query,phone) VALUES('$std_name','$std_email','$std_address','$std_query', '$std_phone')");
	if($q){
		$msg = "Successfully Submitted!";
		$sts = "success";
	}else{
		$msg = "Not submitted. Something went wrong! Please re-write.";
		$sts = "danger";
	}
}


 ?>
	<head>
		<style>
			hr{
				background-color: #E0E0E0;
			}
		</style>
	</head>
 		<?php if (!empty($msg)): ?>
						<div class="alert alert-<?=$sts?> text-center font-weight-bold">
							<?=$msg?>
						</div>
					<?php endif ?>
 <div class="row d-flex container-fluid w-auto">
 	<div class="col-md-5 bg-dark text-muted">
 		<div class="container-fluid">
 			<h2 class="font-weight-bold w-auto">REQUEST AN INQUIRY</h2>
 		<p>After Submission of Inquiry form our Representative will contact you within 24hrs .</p>
 		<p>If we failed to Contact You on time please Reach out to Our Branch Managers Directly on the mentioned Contact Numbers : </p>
 			<a class="text-muted" href="tel:+92412402201" class="text-decoration-none text-light">Phone: (041) 2402201</a>	
 		</div>			
 	</div>
 	<div class="col-md-1 text-center m-auto" style="animation-name: rotation; animation-duration: 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
 		<i class="fa-solid fa-circle-arrow-right" style="font-size: 50px;"></i>
 	</div>
 	<div class="col-md-6 container">
<form class="m-3" method="POST">

	<div class="form-group row container">
		<p><b>Note: </b>Fields contain <b>*</b> are required to be filled to proceed.</p>
	</div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" required>Name*</label>
    <div class="col-sm-10">
      <input type="text" name="std_name" class="form-control" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" required>Email*</label>
    <div class="col-sm-10">
      <input type="email" name="std_email" class="form-control" placeholder="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <textarea class="container-fluid form-control" name="std_address" cols="30" rows="3" placeholder="Enter your address"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" required>Query*</label>
    <div class="col-sm-10">
      <textarea cols="30" rows="3" class="form-control" name="std_query" placeholder="Enter Your Query / Feedback"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone*</label>
    <div class="col-sm-10">
      <input type="numbers" class="form-control" name="std_phone" placeholder="03xxxxxxxxx" required>
    </div>
  </div>
  <div class="form-group row ">
    <div class="col-sm-12">
      <input type="submit" class="form-control m-auto bg-dark text-white w-50" placeholder="03xxxxxxxxx" value="Submit">
    </div>
  </div>
</form>
 	</div>
 </div>
<?php include'footer.php' ?>