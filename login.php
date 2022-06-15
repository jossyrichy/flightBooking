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
									<h3 class="modal-title text-center text-info">Login to KdtexTravel</h3>
									<a href="index.php" class="btn-close" data-bs-dismiss="modal"></a>
								</div>
								<div class="modal-body ">
									<form method="POST" action="">
							
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
											<input type="checkbox" name="" class="custom-control-input">
											<label class="custom-control-label"><a href="#" class="link"><strong>Remember Me</strong></a></label><br>
											<a href="#" class="text-info" style="float: right; position: relative; bottom: 30px; font-size: 18px;">forgot password?</a>
										</div>
										<div class="form-group">
											<button class="form-control btn-info w-100 mb-3  text-white">
												<i class="fa-solid fa-user-plus"></i>Login
											</button>
										</div>
										<div class="form-group">
											<button class="form-control btn-primary w-100 mb-3 text-white">
												<i class="fa fa-facebook"></i>Sign in with Facebook
											</button>
										</div>
										<div class="form-group">
											<button class="form-control btn-default mb-3 w-100  text-dark">
												<i class="fa fa-google"></i>Sign in with Google
											</button>
										</div>
										<div class="form-group ">
											<span>Don't have an account?</span>
										
											<a href="signup.php" class="btn btn-info px-3 text-center text-white" style="float: right;">Sign Up</a>
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