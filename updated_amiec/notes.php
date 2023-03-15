<?php include'connection.php';
	include'lib.php';
?>
<iframe src="https://drive.google.com/file/d/1iCIZnqhBRVbgad8NCEh_GwIvZMDc2qcQ/preview" frameborder="1" width="500" height="500"></iframe>
<div class="col-md-2">
    <a href="add-pdf.php"><button class="btn border-danger bg-dark text-light">Add New Alert</button></a>
</div>
<?php 
	$select = mysqli_query( $conn, "SELECT * FROM `notes`" );
    if ($select) {

      if (mysqli_num_rows($select) > 0) {
        while ( $row = mysqli_fetch_assoc( $select ) ) { 
        $name = $row['name'];
        $pdf_src = "uploads/pdf/".$name; 
          echo " 
          	<div class='row'>          
          	<div class='col-md-10'>
					<h3>".$row['title']."</h3>
					<iframe src='".$pdf_src."' frameborder='0' width='500' height='500' frameborder='0'></iframe>
			</div>
			</div>
			";
		}
	}
}

?>