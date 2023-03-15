<?php include'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Right click prevent -->
		<script>
			document.addEventListener('contextmenu', function(e){
				alert("Right click options are closed due to data prevention!")
			e.preventDefault();
			})
		</script>


		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>AMIEC - Schools</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="about-us.css">
		<link rel="stylesheet" href="login.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<style>
		 @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
		@keyframes blinker {
	50%{
	opacity: 0;
	}
}
	
	@media only screen and (max-width: 671px){
		.news-btn{
			width: 32% !important;
		}
		.search-box{
			width: 50% !important	;
		}
	}
	@media only screen and (max-width: 422px){
		.news-btn{
			width: 33% !important;
			font-size: 12px !important;
		}
		.marquee-items{
			font-size: 12px;
		}
		.search-box{
			width: 60%;
		}
	}
	@media only screen and (max-width: 318px){
		.news-btn{
			width: 32% !important;
			font-size: 9px !important	;
		}
		.search-box{
			width: 50% !important	;
		}
		.achievement-h{
			font-size: 20px !important;
		}
	}




		</style>
		<link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
		<link rel="manifest" href="imgs/site.webmanifest">
	</head>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63ad4c40c2f1ac1e202aaa20/1glef3nr0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
	<div class="container-fluid">	
			<div class="row address">
			<div class="col-md-12 text-center">
				<a href="contact-us.php" id="address-ol-li">Allama Muhammad Iqbal Educational Complex, Gulshan-E-Iqbal Colony, Resala-E-wala road, Faisalabad</a>
				&nbsp;&nbsp;<a href="tel:+92412402201">Phone : (041) 2402201</a> &nbsp;&nbsp;<a href="tel:+923000988170">Phone : (+92) 300 0988170</a>
			
			</div>
			</div>
	</div>

<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF;">
  <a class="navbar-brand ml-5" style="font-family: 'Satisfy', cursive;"; href="index.php"><img src="imgs/icon.png" width="64x64"> AMIEC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="nav">
		  <li class="nav-item">
		    <a class="nav-link" href="index.php">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="about-us.php">About us</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="inquiry.php">Inquiry</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="team.php">Team</a>
		  </li>
		  <!-- <li class="nav-item">
		    <a class="nav-link" href="notes.php">Notes</a>
		  </li> -->
		  <li class="nav-item">
		    <a class="nav-link" href="contact-us.php">Contact us</a>
		  </li>
		  <li class="nav-item">
		    <a class="btn btn-outline-success bg-secondary text-white" href="std-login.php">Login</a>
		  </li>
		</ul>
  </div>
</nav>
		<!-- <form class="row form-inline my-2 my-lg-0 bg-dark p-3 w-100 m-auto">
			<div class="col-md-12">
				<div class="row justify-content-end">
				<div class="col-md-8 align-items-center d-flex">
				<input class="form-control mr-sm-2 w-50 search-box" type="search" placeholder="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>		
				</div>
				</div>
			</div>
    </form> -->
    <div class=" d-flex align-items-center bg-light" style=" height: 30px;">
	<button class="btn p-0 news-btn" style="width: 18%; height:  30px; font-weight: 800; font-size: 16px;">News Alerts!</button>
			<marquee id="blink"  direction="left" scrolldelay="100" style="color: darkred; 
			 animation: blinker 1.5s infinite;">
				<ul class="news d-flex mt-2">
<?php
    $select = mysqli_query( $conn, "SELECT * FROM news " );
    if ($select) {

      if (mysqli_num_rows($select) > 0) {
        while ( $record = mysqli_fetch_assoc( $select ) ) {  
          echo " 
          <li> "."Dated: ".$record['date']."&nbsp;&nbsp;&nbsp;(".$record['news'].")&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."</li>
          ";          
        }
      }
    }
?>
				</ul>
			</marquee>
			</div>