<?php include'lib.php' ?>
	<head>
		<style>
			hr{
				background-color: #E0E0E0;
			}
			.person-p{
				font-size: 12px;
			}
		</style>
	</head>

<div class="container d-block">
	<h2 class="font-weight-bold text-center">Our Team</h2>
		<p class="our-team-p text-center">Our Qualifed and Experinced team is available 24 / 7 to serve the community that is ready to reshape their future!</p>
				<?php
    $staff_select = mysqli_query( $conn, "SELECT * FROM `staff`" );
    if ($staff_select) {

      if (mysqli_num_rows($staff_select) > 0) {
        while ( $staff = mysqli_fetch_assoc( $staff_select ) ) { 
        $image = $staff['img'];
        $image_src = "uploads/staff/".$image; 
          echo " 
          <div class='row'>
           <div class='col-md-2'>
					<img class='w-75' src='".$image_src."' >
				</div> 
          
          <div class='col-md-10'>
					<h3>".$staff['name']."</h3>
					<h6 class='news-text-p'>".$staff['designation']."</h6>
					<h3 class='news-text-p'><b><i>Qualification: </i></b>".$staff['education']."</h3>
					<h3 class='news-text-p'><b><i>Experience: </i></b>".$staff['experience']."</h3>
				</div>
			</div><hr>
          "; 
        }
      }
    }
?>
			
</div>
			

	<?php include'footer.php' ?>
