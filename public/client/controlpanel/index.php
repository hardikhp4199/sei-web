<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Login</title>
    <!--! END:  Apps Title-->
   
<?php include("admin_headerlink.php"); ?>
    



</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="assets/images/auth/auth-cover-login-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <div class="wd-200 mb-5">
                        <img src="assets/images/sei_group.png" alt="" class="img-fluid">
                    </div>
                    <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                    <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>
                    <p class="fs-12 fw-medium text-muted">Thank you for get back <strong>Nelel</strong> web applications, let's access our the best recommendation for you.</p>
                    <form action="index.html" class="w-100 mt-4 pt-2">
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Email or Username" value="" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" value="" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label c-pointer" for="rememberMe">Remember Me</label>
                                </div>
                            </div>
                            <div>
                                <a href="auth-reset-cover.html" class="fs-11 text-primary">Forget password?</a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
                        </div>
                    </form>
                   
                    <div class="mt-5 text-muted">
                        <span> Don't have an account?</span>
                        <a href="auth-register-cover.html" class="fw-bold">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--! BEGIN: Vendors JS !-->
<?php include("admin_footerlink.php"); ?>
</body>

</html>