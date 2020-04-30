<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from hencework.com/theme/philbert/full-width-light/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Mar 2020 15:15:02 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Philbert I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="../../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
						<span class="brand-text">Philbert</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Already have an account?</span>
					<a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="login.html">Sign In</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign up to Philbert</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<!-- <form action="{{url('post-registration')}}" method="POST" id=>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputName_1">Name</label>
													<input type="text" class="form-control" required="" id="exampleInputName_1" placeholder="Name">
                  									
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter pwd">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirm Password</label>
													<input type="password" class="form-control" required="" id="exampleInputpwd_3" placeholder="Enter pwd">
												</div>
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> I agree to all <span class="txt-primary">Terms</span></label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-success btn-rounded">sign Up</button>
												</div>
											</form> -->



											<form action="{{url('post-registration')}}" method="POST" id="regForm">
												{{ csrf_field() }}
												<div class="form-label-group">
												<input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
												<label for="inputName">Name</label>
								
												@if ($errors->has('name'))
												<span class="error">{{ $errors->first('name') }}</span>
												@endif       
								
												</div> 
												<div class="form-label-group">
												<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
												<label for="inputEmail">Email address</label>
								
												@if ($errors->has('email'))
												<span class="error">{{ $errors->first('email') }}</span>
												@endif    
												</div> 
								
												<div class="form-label-group">
												<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
												<label for="inputPassword">Password</label>
												
												@if ($errors->has('password'))
												<span class="error">{{ $errors->first('password') }}</span>
												@endif  
												</div>
								
												<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
												<div class="text-center">If you have an account?
												<a class="small" href="{{url('login')}}">Sign In</a></div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>

<!-- Mirrored from hencework.com/theme/philbert/full-width-light/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Mar 2020 15:15:02 GMT -->
</html>
