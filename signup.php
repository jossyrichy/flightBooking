<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c3cec2a2da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<div class="modal d-block " id="mymodal">
						<div class="modal-dialog ">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title text-center text-info">Sign Up to KdtexTravel</h3>
									<a href="index.php" class="btn-close" data-bs-dismiss="modal"></a>
								</div>
								<div class="modal-body ">
									<form method="POST" action="">
							
										<div class="form-group">
											<label class="mb-2">Title</label>
											<select class="form-control p-2 w-100">
												<option value=""></option>
												<option value="Mr">Mr</option>
												<option value="Mr">Mrs</option>
												<option value="Other">other</option>
											</select>
										</div>
										<div class="form-group">
											<label class="mb-2">First name</label>
											<input type="text" class="form-control w-100" name=""
											 value="" placeholder="Enter first name..">
										</div>
										<div class="form-group">
											<label class="mb-2">Surname</label>
											<input type="text" class="form-control w-100" name="" 
											value=""  placeholder="Enter last name..">
										</div>
										<div class="form-group">
											<label class="mb-2">Email</label>
											<input type="email" class="form-control w-100" name="" 
											value="" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label class="mb-2">Password</label>
											<input type="password" class="form-control w-100" name="" 
											value="" placeholder="Enter password">
										</div>
										<div class="form-group">
											<span class="d-flex d-inline-block mb-3" style=" letter-spacing: 1px">
												<input type="checkbox" style="position: relative; top: 10px; width: 20px; height: 30px;" name=""><span style="margin-left: 10px;">I agree<br> to the</span> 
												 <a href="#" class="text-info mx-3">Covid-19 Disclaimer and <br>Terms and Conditions</a>
											</span>	
										</div>
										<div class="form-group">
											<button class="form-control btn-info w-100 mb-4 text-white">
												<i class="fa-solid fa-user-plus"></i>Sign Up
											</button>
										</div>
										<div class="form-group">
											<button class="form-control btn-primary w-100 mb-3 text-white">
												<i class="fa fa-facebook"></i>Sign Up with Facebook
											</button>
										</div>
										<div class="form-group">
											
											<button class="form-control btn-default mb-3 w-100  text-dark">
												<i class="fa fa-google"></i>Sign Up with Google
											</button>
										</div>
										<div class="form-group ">
											<span>Already have an account?</span>
											<a href="login.php" class="btn btn-info px-3 text-center text-white" style="float: right;">Login</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>