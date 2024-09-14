<!DOCTYPE html>
<html lang="en">
<head>
    @include('Expertpanel.layouts.shared.title-meta', ['title' => 'Log In'])
    @include('Expertpanel.layouts.shared.head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>
<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="#" class="logo-light">
                                            <img src="/admin/images/sei_group.png" alt="logo" height="150">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Expert Sign In</h4>
                                        <p class="text-muted mb-3">Enter your phone number and email to get OTP.</p>

                                        <form method="POST" action="{{ route('expert.login') }}">
                                            @csrf

                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <p class="text-danger">{{ $error }}</p>
                                                @endforeach
                                            @endif

                                            <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input class="form-control" 
           type="text" 
           name="phone" 
           id="phone" 
           maxlength="10" 
           placeholder="Enter your phone number" 
           value="{{ old('phone') }}"
           inputmode="numeric" 
           pattern="[0-9]*" 
           oninput="this.value = this.value.replace(/[^0-9]/g, '')">
</div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control" type="text" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                                            </div>
                                            
                                               <!-- <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password">
        <a href="auth-forgotpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
    </div> -->
    
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit">
                                                    <i class="ri-login-circle-fill me-1"></i> 
                                                    <span class="fw-bold">Get OTP</span>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">Don't have an account? <a href="{{ route('expert.signup') }}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Sign up</b></a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())
            </script> © SEI Group. 2024. All rights reserved. | Design & Developed by Adi Creations
        </span>
    </footer>

    @include('Expertpanel.layouts.shared.footer-scripts')
</body>
</html>
