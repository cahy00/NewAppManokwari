<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
		<link href="{{asset('assets/bkn/icon-garuda.ico')}}" rel="icon">

    <title>Login - Kantor Regional BKN XIV Manokwari</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body style="
		background-image: url('{{asset('assets/bkn/bkn_mkw.png')}}');
		background-size: cover;
    position: relative;">
    <div class="container" >
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(245, 245, 245, 1);
					opacity: .9;">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
									</div>
									@if (session('success'))
									<div class="alert alert-primary" role="alert">
										{{session('success')}}
									</div>
									@endif
									@if (session('loginError'))
									<div class="alert alert-danger" role="alert">
										{{session('loginError')}}
									</div>
									@endif
									<form class="user" action="/login" method="POST">
										@csrf
										<div class="form-group">
											<input
												type="email"
												class="form-control form-control-user"
												id="exampleInputEmail"
												aria-describedby="emailHelp"
												placeholder="Enter Email Address..."
												name="email"
												autofocus
												required
											/>
										</div>
										<div class="form-group">
											<input
												type="password"
												class="form-control form-control-user"
												id="exampleInputPassword"
												placeholder="Password"
												name="password"
												required
											/>
										</div>
										<button
											type="submit"
											class="btn btn-primary btn-user btn-block">
											Login
										</button>
										<hr />
										<a
											href="index.html"
											class="btn btn-google btn-user btn-block"
										>
											<i class="fab fa-google fa-fw"></i> Login with Google
										</a>
										<a
											href="index.html"
											class="btn btn-facebook btn-user btn-block"
										>
											<i class="fab fa-facebook-f fa-fw"></i> Login with
											Facebook
										</a>
									</form>
									<hr />
									<div class="text-center">
										<a class="small" href="forgot-password.html"
											>Forgot Password?</a
										>
									</div>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
