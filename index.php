<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c3cec2a2da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/file:///C:/xampp/htdocs/flight_project/css/all.css"> -->
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	  	<div class="container-fluid mx-3 mt-2">
		    <a class="navbar-brand" href="#">
		    	<img src="img/logo2.jpeg" alt="flight logo" style="width: 80px; height: 50px; border-radius: 50%;">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link text-info active" aria-current="page" href="#">Flights</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-dark px-3 accomodation" href="#">Accomodation</a>
			        </li>
			       	 <li class="nav-item">
			          <a class="nav-link text-dark" href="#">Cars</a>
			        </li>
		      	</ul>
		      	<form class="d-flex">
			        <a href="signup.php" class="btn btn-outline-info mx-2">Sign Up</a>
			        <a href="login.php" class="btn btn-info">Login</a>
		      	</form>
	    	</div>
	  	</div>
	</nav>
	<div class="container-fluid bg-light">
		<div class="row">
			<div class="col-md-12 " style="margin-top: 70px;">
	
			</div>
		</div>
	</div>
 
		<!-- form creation -->
	<section class="bg-light" style="background-size: cover;">
		
		<div class="container bg-light">
			<h3 id="title">Search and Book Cheap Flights</h3>
			<div id="form" class=" d-flex  ">
				<form class="form-group bg-light" method="POST" action="">
					<div id="input3" class="mb-2 d-flex">
						<div>
							<input type="radio" name="r" id="input">
							<label for="input-grp">Return</label>
						</div>
						<div class="d-inline-block input3">
							<input type="radio" name="r" id="input-grp">
							<label for="input-grp" class="label-option">One-Way</label>
						</div>
						<div class="d-inline-block input3">
							<input type="radio" name="r" id="input-grp">
							<label for="input-grp" class="label-option">Multi-City</label>
						</div>
					</div>

					<div id="input" class="col-md-12">
					 	<input type="text" name="" class="form-control input-group"  placeholder="From">
					 	<input type="text" name="" class="form-control input-group"  placeholder="To">
				
					 	<select  class="form-control input-group">
					 		<option value="">Preffered Seating</option>
					 		<option value="">Economy Class</option>
					 		<option value="">Business Class</option>
					 		<option value="">First Class</option>
					 	</select>
					 	<input type="number" name="" class="form-control input-group" placeholder="Adult">	
					</div>

					<div id="input2" class="col-md-12  justify-content-center align-items-center">
						<input type="number" name="" class="form-control input-group" placeholder="Children(2-11years)">
						<!-- <label>Departure:</label> -->
						<input type="date" name="" class="form-control input-group" placeholder="Departure">
						<!-- <label>Return:</label> -->
						<input type="date" name="" class="form-control input-group select-date" placeholder="Return">

						<input type="number" name="" class="form-control input-group" placeholder="Infant(under 2years)">
						
					</div>	
					
					<button type="button" class="btn btn-info flight form-control ">Search Flight</button>			
				</form>
			</div>
		</div>
	</section>	
	<!-- flight promo struture markup -->
	<section class="bg-white" id="card-section" >
		<div class="container bg-white" style="margin-top: 30px; margin: 10 auto;">
			<div class="row d-flex" id="column">
				<h3>Flight Promos and Products</h3>
				<p style="font-size: 22px">Our latest cheap deals, exclusive product offerings and travel news</p>
				<div class=" col-md-4 column2 column3">
				  <img src="img/plane1.jpeg" class="" alt="..." style="height: 42vh; width: 100%">
				  <div class="card-body">
				    <h5 class="card-title">Student Flight Deals</h5>
				    <p class="card-text">Some quick example text</p>
				    <a href="#" class="btn btn-default">Get a Qoute</a>
				  </div>
				</div>
				<div class="col-md-4 column2 column3">
				  <img src="img/plane2.jpeg" class="card-img-top" alt="..." style="height: 42vh; width: 100%;">
				  <div class="card-body">
				    <h5 class="card-title">What To Know Before You Fly</h5>
				    <p class="card-text">Some quick example text to build</p>
				    <a href="#" class="btn btn-default">Learn More</a>
				  </div>
				</div>
				<div class="col-md-4 column2" id="column2">
					<div class="d-inline-block column ">
						<img src="img/plane3.jpeg" class="card-img-top d-inline-block" alt="..." style="height: 115px; width: 105px">
						<a href="#" class="d-inline-block float-right">
							<h5>Need Help?</h5>
							<span>Contact Us</span>
						</a>
					</div>
					<div class="d-inline-block column">
						<img src="img/plane4.jpeg" class="card-img-top d-inline-block" alt="..." style="height: 115px; width: 105px">
						<a href="#" class="d-inline-block justify-content-center float-right">
							<h5>Flight Savings are Here</h5>
							<span>Book Now</span>
						</a>
					</div>
					<div class="d-inline-block column">
						<img src="img/plane5.jpeg" class="card-img-top d-inline-block" alt="..." style="height: 115px; width: 105px">
						<a href="#" class="d-inline-block float-right">
							<h5>Read Our Travel Blog</h5>
							<span>Get Inspired</span>
						</a>
					</div>
				</div>
			</div>	
		</div>
	</section>
		<!-- customer structure markup -->
	<section class="bg-white w-100" id="customer-section">
		<div class="container bg-white" style="">
			<h3 class="d-flex justify-content-center mb-3">Customer Support</h3>
			<div class="row " id="customer">
				
				<div class="col-md-6 customer">
					<div class="d-inline-block icon">
						<span><i class="fa fa-phone "></i></span>
						<h3 class="d-inline-block ">Manage Flight</h3>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p>
					<a href="#" class="btn btn-default">Contact Us</a>
					
				</div>
				<div class="col-md-6 customer ">
					<div class="icon d-inline-block">
						<span><i class="fa fa-question-circle-o"></i></span>
						<h3 class="d-inline-block  ">Frequently asked Question</h3>
					</div>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p>
					<a href="#" class="btn btn-default">View More</a>
				</div>
			</div>
		</div>
	</section>
		<!-- dicision structure markup-->
	<section class="bg-white w-100" style="margin-top: 20px;" id="decision-section">
		<div class="container">
			<h4 class="text-center d-4 text-dark">Decision, decision, decision...</h4>
			<div class="row row-decision">
				<div class="col-md-6 decision">
					<div class="d-inline-block decision1 bg-primary ">
						<span><i class="fa  fa-plane"></i></span>
					</div>
					<div class="d-inline-block float-right">
						<h5>Need help choosing an airline?</h5>
						<a href="#" class="bg-primary">View all</a>
					</div>
				</div>
				<div class="col-md-6 decision">
					<div class="d-inline-block decision1 bg-primary">
						<span><i class="fa fa-map-location"></i></span>
					</div>
					<div class="d-inline-block float-right">
						<h5>Looking for location inspiration?</h5>
						<a href="#" class="bg-primary">View all</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light" id="kdtex-section">
		<div class="container-fluid pt-4 px-4">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-dark pt-2">kdtexTravels: Cheap flights, incredible hotels and affordable car rentals</h3>
				</div>
				<div class="col-md-12 text-center">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 mt-3 p-3">
					<h3 class="text-center mb-3">What does Travelstart do?</h3>
					<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
				</div>
				<div class="col-md-6 mt-3 p-3">
					<h3 class="text-center mb-3">Why book with Travelstart?</h3>
					<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light" id="sub-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<form action="" method="POST" class="form-group">
						<h5 class="text-dark mb-4">SUBSCRIBE TO OUR NEWSLETTER</h5>
						<input type="text" name="" placeholder="Enter Your Full Name.." class="form-control mb-3" style="width: 348px;">
						<div class="d-flex d-inline-block">
							<input type="email" class=" form-control" name="" placeholder="Enter Your Email">	
							<a href="#" class="btn btn-info text-white">Subscribe</a>
						</div>
					</form>
				</div>
				<div class="col-md-3 plan-trip">
					<h5 class="text-dark mb-4">PLAN YOUR TRIP</h5>
					<a href="#" class="d-block">Products $ Services</a>
					<a href="#" class="d-block">Travellers Guild</a>
					<a href="#" class="d-block">Destination</a>
					<a href="#" class="d-block">Flight Deals</a>
					<a href="#" class="d-block">Blog</a>
				</div>
				<div class="col-md-3">
					<h5 class="text-dark mb-4">PARTNERS</h5>
					<a href="#" class="d-block link">Become an Affliate</a>
				</div>
				<div class="col-md-2">
					<h5 class="text-dark mb-4">NEED HELP?</h5>
					<a href="#" class="d-block link">Contact Us</a>
					<a href="#" class="d-block link">FAQ</a>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-white" id="footer-form-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-8">
					<img src="img/phone.jpg" style="width: 150px; height: 90px;">
					<div class="d-inline-block " style="position: relative; bottom: -20px;">
						<span class="d-block" style="position: relative; top: 25px; ">Download our free app today </span>
						<select class="custom-select outline-gray border" style="padding: 10px; margin-top: 25px; width: 80px;">

							<option value="+234">+234</option>
							<option value="+234">+233</option>
							<option value="+234">+334</option>
							<option value="+234">+24</option>
							<option value="+234">+232</option>
							<option value="+234">+222</option>
						</select>
						<input type="text" name="" class="form-control ml-0" placeholder="Enter Your Number">
						<a href="#" class=" btn btn-info text-decoration-none text-white my-3" id="sub-btn">Send download link</a>
					</div>
				</div>
				<div class="col-md-4 p-4" id="app-btn" style="position: relative; bottom: -20px;">
					
					<a href="#" class="btn " class="app-btn" style="position: relative; left: 65px;">
						<img src="img/app-store.png " style="width: 125px; height: 50px;">
					</a>
					<a href="#" class="btn " class="app-btn" style="position: relative; right: -45px;">
						<img src="img/google-play.png" style="width: 140px; height: 70px;">
					</a>	
				</div>
				<hr class="" style="border: 1px solid gray; ">
			</div>
		</div>
	</section>
	<section class="bg-white pb-0" id="footer-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-8 footer" style="position: relative; top: -40px;">
					<a href="#" class="">About Us</a>
					<a href="#" class="">Contact Details</a>
					<a href="#" class="">FAQ</a>
					<a href="#" class="">Careers</a>
					<a href="#" class="">Press</a>
					<a href="#" class="">T&Cs</a>
					<a href="#" class="">Privacy</a>
				</div>
				<div class="col-md-4 d-flex justify-content-end footer-icon" style="position: relative; top: -45px;">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-play"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-camera-retro"></i></a>
				</div>
			</div>
			<div class="col-md-12 d-flex justify-content-end" style="position: relative; top: -20px;">
				<span>Secured by: <img src="img/logo1.jpeg" style="width: 70px; height: 60px;"></span>
			</div>
		</div>
	</section>
	
	









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
    	
    </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>