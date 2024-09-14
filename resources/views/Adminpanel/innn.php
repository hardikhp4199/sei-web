<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <title>Login</title>
   
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Link to Custom CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/custom.css') }}">
    

       <!--! BEGIN: Favicon-->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" /> -->
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/daterangepicker.min.css') }}" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/theme.min.css') }}" />
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="{{ asset('admin/images/auth/auth-cover-login-bg.svg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <div class="wd-200 mb-5">
                        <img src="{{ asset('admin/images/sei_group.png') }}" alt="" class="img-fluid">
                    </div>
                    <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                    <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>
                    <p class="fs-12 fw-medium text-muted">Thank you for getting back to <strong>Nelel</strong> web applications, let's access our best recommendations for you.</p>
                    <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="Username">Username</label>
                        <input id="Username" type="text" name="Username" required autofocus>
                    </div>

                    <div>
                        <label for="Password">Password</label>
                        <input id="Password" type="password" name="Password" required autocomplete="current-password">
                    </div>

                    <button type="submit">Login</button>
                </form>
                    <div class="mt-5 text-muted">
                        <span>Don't have an account?</span>
                        <a href="#" class="fw-bold">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Link to jQuery (optional, but required by Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Link to Bootstrap JS -->
    <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Link to Custom JS -->
    <script src="{{ asset('client/js/custom.js') }}"></script>


</body>

</html>
