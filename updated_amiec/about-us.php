<?php include'lib.php' ?>
<?php include'connection.php'?>
<head>
		<style>
			hr{
				background-color: #E0E0E0;
			}
		</style>
	</head>
	
<div class="container d-flex w-100 p-auto" style="padding-bottom: 100px;">
	<div class="container-fluid row">
		<img class="w-100" src="images/mission_statement.jpg" alt="">
		<h3 class="font-weight-bold about-h3">About AMIEC</h3><hr>
		<p class="about-p"><b>AMIEC</b> was created to address the need for professional Educational consulting.
Unlike other, <b>AMIEC</b> strives to partner with your future to implement solutions that you need.
We do not try unnecessary services. If you're successful, we're successful.
We believe that Technology plays vital role for grooming Students and Futures.
That's why we always try to help people in achieving their objectives by using best technologies and consulting Staff.</p>
<h3 class="font-weight-bold about-h3">Mission</h3><hr>
<p class="about-p">"Strengthen the humans to equip what they envisage."</p>
<p class="about-p">To alleviate the future of Technology making it contingent for students, institute and Staff.</p>
	</div>
	<div class="row about-cards container-fluid">
		<div class="col-md-12">
			<h2 class="news-h2">Events</h2>
			<marquee direction="up" scrolldelay="100">
				<div class="row top-padding">
				<div class="col-md-12 news-flex">
					<div class="news-card-text">
						<?php
					    $select = mysqli_query( $conn, "SELECT * FROM events " );
					    if ($select) {

					      if (mysqli_num_rows($select) > 0) {
					        while ( $record = mysqli_fetch_assoc( $select ) ) {  
					          echo " 
					          <h4>".$record['name']."</h4>
					          <p>".$record['date']."</p>
					          ";          
					        }
					      }
					    }
					?>
						
					</div>
				</div>
			</div><hr>			
			</marquee>
	</div>
	</div>
	
	</div>
	</div>

	<?php include'footer.php' ?>
